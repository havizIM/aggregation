@extends('layouts.app')

@section('content')
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
@endsection