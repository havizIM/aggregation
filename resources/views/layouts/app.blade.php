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

    <div class="container">
        <div class="card mt-5 mb-5">
            <div class="card-body">
                <h4 class="card-title">Multiple / Dinamically Input</h4>

                <form action="" id="form_dinamis">

                    <div class="form-group">
                        <label for="invoice_no">Invoice No</label>
                        <input type="text" required minlength="5" maxlength="20" name="invoice_no" id="invoice_no" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="customer">Customer</label>
                        <input type="text" required minlength="5" maxlength="200" name="customer" id="customer" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" required name="date" id="date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="due">Due</label>
                        <input type="date" required name="due" id="due" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="note">Note</label>
                        <textarea name="note" id="note" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" required id="status" class="form-control">
                            <option value=""></option>
                            <option value="Draft">Draft</option>
                            <option value="Publish">Publish</option>
                        </select>
                    </div>


                    <h4 class="mt-5">Items</h4>

                    <div class="table-responsive">
                        <table class="table" id="t_item">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Unit</th>
                                    <th>Unit Price</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                    <th>Remark</th>
                                    <th>
                                        <button class="btn btn-danger btn-sm" type="button" id="btn_delete_all">Delete All</button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" required minlength="5" maxlength="100" class="form-control" name="item[0]" id="item_0">
                                    </td>
                                    <td>
                                        <input type="text" required minlength="5" maxlength="20" class="form-control" name="unit[0]" id="unit_0">
                                    </td>
                                    <td>
                                        <input type="number" required min="0" class="form-control" name="unit_price[0]" id="unit_price_0">
                                    </td>
                                    <td>
                                        <input type="number" required min="0" class="form-control" name="qty[0]" id="qty_0">
                                    </td>
                                    <td>
                                        <input type="number" required min="0" class="form-control" name="total[0]" id="total_0">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="remark[0]" id="remark_0">
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <button class="btn btn-sm btn-info" type="button" id="btn_add">+ Add Item</button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <button class="btn btn-block btn-primary" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
    
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