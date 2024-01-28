<script type="text/javascript">

    $(document).ready(function () {
        fetch_cot_data();
        fetch_cot_tolerance();

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
    const fetch_cot_tolerance = () => {
        $('#cs_part_name').change(function () {
            var cs_part_name = $(this).val();
            // Make an AJAX request to fetch data based on the selected option
            $.ajax({
                url: '../../../process/cot/admin/start_point_p.php', // Create this PHP file to handle data fetching
                type: 'POST',
                data: {
                    method: 'fetch_cot_tolerance',
                },
                dataType: 'json',
                success: function (data) {
                    // Populate the text-boxes with the fetched data
                    $('#cs_id_tol_add').val(data.i_dia_tol_add);
                    $('#cs_id_tol_min').val(data.i_dia_tol_min);
                    $('#cs_od_tol_add').val(data.o_dia_tol_add);
                    $('#cs_od_tol_min').val(data.o_dia_tol_min);
                    $('#cs_wt_tol_add').val(data.w_tol_add);
                    $('#cs_wt_tol_min').val(data.w_tol_min);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });
    }


    let startDate, endDate;

    function cs_tstart_btn() {
        startDate = new Date();
        document.getElementById('cs_tstart_input').value = formatDate(startDate);
        document.getElementById('cs_tend_btn').disabled = false;
        document.getElementById('cs_tstart_btn').disabled = true;
    }

    function cs_tend_btn() {
        endDate = new Date();
        document.getElementById('cs_tend_input').value = formatDate(endDate);
        document.getElementById('cs_tend_btn').disabled = true;

        const timeDiff = endDate - startDate;
        const totalMinutes = timeDiff / (1000 * 60);
        document.getElementById('total_cs_mins').value = totalMinutes.toFixed(2);
    }

    function formatDate(date) {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        const hours = String(date.getHours()).padStart(2, '0');
        const minutes = String(date.getMinutes()).padStart(2, '0');
        const seconds = String(date.getSeconds()).padStart(2, '0');
        return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
    }



</script>