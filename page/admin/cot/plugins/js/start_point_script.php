<script type="text/javascript">

$(document).ready(function () {
    fetch_cot_data();
    });

    const fetch_cot_data = () => {
        $.ajax({
            url: '../../../process/cot/admin/start_point_p.php',
            type: 'POST',
            cache: false,
            data: {
                method: 'fetch_cot_data',
            },
            success: function (response) {
                $('#cs_part_name').html(response);
            }
        });
    }

    
    </script>