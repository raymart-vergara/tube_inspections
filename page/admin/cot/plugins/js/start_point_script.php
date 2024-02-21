<script type="text/javascript">

    $(document).ready(function () {
        fetch_cot_data();
        fetch_cot_tolerance();
        cot_start_point();

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

    // Start button function
    let startDate, endDate;
    function cs_tstart_btn() {
        startDate = new Date();
        document.getElementById('cs_tstart_input').value = formatDate(startDate);
        document.getElementById('cs_tend_btn').disabled = false;
        document.getElementById('cs_tstart_btn').disabled = true;
    }
    // End button function
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


    const cot_start_point = () => {
        let cs_part_name = document.getElementById('cs_part_name').value;
        let cs_quantity = document.getElementById('cs_quantity').value;
        let cs_tstart_input = document.getElementById('cs_tstart_input').value;
        let cs_tend_input = document.getElementById('cs_tend_input').value;
        let cs_inspby = document.getElementById('cs_inspby').value;
        let cs_shift = document.getElementById('cs_shift').value;
        let cs_ins_date = document.getElementById('cs_ins_date').value;
        let total_cs_mins = document.getElementById('total_cs_mins').value;
        let cs_outside_app = document.getElementById('cs_outside_app').value;
        let cs_inside_app = document.getElementById('cs_inside_app').value;
        let cs_slit_con = document.getElementById('cs_slit_con').value;
        let cs_color_app = document.getElementById('cs_color_app').value;

        if (cs_part_name == '') {
            Swal.fire({
                icon: 'info',
                title: 'Input Part Name !!!',
                text: 'Information',
                showConfirmButton: false,
                timer: 1000
            });
        } else if (cs_quantity == '') {
            Swal.fire({
                icon: 'info',
                title: 'Input Quantity !!!',
                text: 'Information',
                showConfirmButton: false,
                timer: 1000
            });
        } else if (cs_tstart_input == '') {
            Swal.fire({
                icon: 'info',
                title: 'Input Quantity !!!',
                text: 'Information',
                showConfirmButton: false,
                timer: 1000
            });
        } else if (cs_tend_input == '') {
            Swal.fire({
                icon: 'info',
                title: 'Input Quantity !!!',
                text: 'Information',
                showConfirmButton: false,
                timer: 1000
            });
        } else if (cs_inspby == '') {
            Swal.fire({
                icon: 'info',
                title: 'Input Quantity !!!',
                text: 'Information',
                showConfirmButton: false,
                timer: 1000
            });
        } else if (cs_shift == '') {
            Swal.fire({
                icon: 'info',
                title: 'Input Quantity !!!',
                text: 'Information',
                showConfirmButton: false,
                timer: 1000
            });
        } else if (cs_ins_date == '') {
            Swal.fire({
                icon: 'info',
                title: 'Input Quantity !!!',
                text: 'Information',
                showConfirmButton: false,
                timer: 1000
            });
        } else if (total_cs_mins == '') {
            Swal.fire({
                icon: 'info',
                title: 'Input Quantity !!!',
                text: 'Information',
                showConfirmButton: false,
                timer: 1000
            });
        } else {
            $.ajax({
                url: '../../../process/cot/admin/start_point_p.php',
                type: 'POST',
                cache: false,
                data: {
                    method: 'cot_start_point',
                    cs_part_name: cs_part_name,
                    cs_quantity: cs_quantity,
                    cs_tstart_input: cs_tstart_input,
                    cs_tend_input: cs_tend_input,
                    cs_inspby: cs_inspby,
                    cs_shift: cs_shift,
                    cs_ins_date: cs_ins_date,
                    total_cs_mins: total_cs_mins,
                    cs_outside_app: cs_outside_app,
                    cs_inside_app: cs_inside_app,
                    cs_slit_con: cs_slit_con,
                    cs_color_app: cs_color_app
                },
                success: function (response) {
                    if (response == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Succesfully Recorded!!!',
                            text: 'Success',
                            showConfirmButton: false,
                            timer: 1000
                        });
                        setTimeout(() => {
                            location.reload();
                        }, 500);
                    }else if (response == 'error') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Cant Save',
                            text: 'Error',
                            showConfirmButton: false,
                            timer: 1000
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Invalid Data',
                            text: 'error',
                            showConfirmButton: false,
                            timer: 1000
                        });
                    }
                }
            });
        }
    }

</script>