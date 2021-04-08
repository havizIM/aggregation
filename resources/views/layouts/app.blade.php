<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dinamically Input</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>

    @yield('content')
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>

    <script>
        $(document).ready(function(){
            let count = 0;

            $('#btn_add').on('click', function() {
                count += 1
                
                let row = `
                    <tr>
                        <td>
                            <input type="text" required minlength="5" maxlength="100" class="form-control" name="item[${count}]" id="item_${count}">
                        </td>
                        <td>
                            <input type="text"  required minlength="5" maxlength="20" class="form-control" name="unit[${count}]" id="unit_${count}">
                        </td>
                        <td>
                            <input type="number" required min="0" class="form-control" name="unit_price[${count}]" id="unit_price_${count}">
                        </td>
                        <td>
                            <input type="number" required min="0" class="form-control" name="qty[${count}]" id="qty_${count}">
                        </td>
                        <td>
                            <input type="number" required min="0" class="form-control" name="total[${count}]" id="total_${count}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="remark[${count}]" id="remark_${count}">
                        </td>
                        <td>
                            <button class="btn btn-sm btn-danger btn-delete" type="button">X</button>
                        </td>
                    </tr>
                `

                $('#t_item tbody').append(row)
            })

            $('#t_item').on('click', '.btn-delete', function(){
                $(this).closest('tr').remove()
            })

            $('#t_item').on('click', '#btn_delete_all', function(){
                $('#t_item tbody tr').not(':first').remove()
                $('#form_dinamis')[0].reset()
            })

            $('#form_dinamis').validate()
        })
    </script>
</body>
</html>