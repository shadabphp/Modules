<?php

if (isset($_GET['export_csv_30_percent']) && !empty($_GET['export_csv_30_percent'])) {
    $quarter = $_GET['export_csv_30_percent'];
    $key = $quarter . '-paywithstripe';

    global $wpdb;
    $payouts_data = $wpdb->prefix . 'payouts_data';

    // Prepare the SQL query with placeholders
    $query = $wpdb->prepare("SELECT * FROM $payouts_data WHERE name_slug = %s", $quarter);
    $results_data = $wpdb->get_results($query);

    if (!empty($results_data)) {
        $paid = $results_data[0]->creator_paid;
        $paid = json_decode($paid, true);

        $data_export = [];
        foreach ($paid as $item) {
            $user_data = get_userdata($item);
            $user_meta = get_user_meta($item, 'payoutpercent', true);

            if ($user_meta !== '50') {
                // Check if user data is retrieved
                if ($user_data) {
                    // Get the user email
                    $email_id = $user_data->user_email;
                    $data_export[] = array(
                        'author_id' => $item,
                        'author_name' => $user_data->display_name,
                        'author_email' => $email_id
                    );
                }
            }
        }
   
        // Generate CSV file
        if (!empty($data_export)) {
            header('Content-Type: text/csv');
            header('Content-Disposition: attachment; filename="all_author_30_percent_payouts.csv"');

            $output = fopen('php://output', 'w');
            // Add header row
            fputcsv($output, array('Author ID', 'Author Name', 'Author Email'));

            // Add data rows
            foreach ($data_export as $row) {
                fputcsv($output, $row);
            }

            fclose($output);
            exit;
        } else {
            echo 'No data to export.';
        }
    } else {
        echo 'No results found for the specified quarter.';
    }
}
?>
