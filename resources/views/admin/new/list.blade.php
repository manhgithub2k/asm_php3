@extends('admin.master')
@section('content')
    <h1 class="app-page-title">Thêm mới</h1>
    <hr class="mb-4">
    <div class="tab-content" id="orders-table-tab-content">
        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
            <div class="app-card app-card-orders-table shadow-sm mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">
                        <table class="table app-table-hover mb-0 text-left">
                            <thead>
                            <tr>
                                <th class="cell">ID</th>
                                <th class="cell">Tiêu Đề</th>
                                <th class="cell">Tóm Tắt</th>
                                <th class="cell">Hình Ảnh</th>
                                <th class="cell">Ngày Đăng</th>
                                <th class="cell">Loại Tin</th>
                                <th class="cell">Lượt Xem</th>
                                <th class="cell">Thao Tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($listTin as $tin)
                                <tr>
                                    <td class="cell">{{ $tin->id }}</td>
                                    <td class="cell"><span class="truncate">{{ $tin->tieu_de }}</span></td>
                                    <td class="cell"><span class="truncate">{{ $tin->tom_tat }}</span></td>
                                    <td class="cell"><span class="truncate"><img class="w-50" src="{{ \Storage::url($tin->hinh_anh) }}"></span></td>
                                    <td class="cell"><span class="truncate">{{ $tin->ngay_dang }}</span></td>
                                    <td class="cell"><span class="truncate">{{ $tin->ten_loai }}</span></td>
                                    <td class="cell"><span class="badge bg-success">{{ $tin->luot_xem }}</span></td>
                                    <td class="cell">
                                        <a class="btn btn-warning" href="{{ route('news.edit',['id'=> $tin->id]) }}">Edit</a>
                                        <form action="{{ route('news.delete', ['id'=> $tin->id]) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" onclick="return confirm('Are you sure!')"
                                                    class="btn btn-danger mt-3">Delete</button>
                                        </form>
                                    </td>
{{--                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>--}}
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div><!--//table-responsive-->

                </div><!--//app-card-body-->
            </div><!--//app-card-->
            <nav class="app-pagination">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav><!--//app-pagination-->

        </div><!--//tab-pane-->

        <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
            <div class="app-card app-card-orders-table mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">

                        <table class="table mb-0 text-left">
                            <thead>
                            <tr>
                                <th class="cell">Order</th>
                                <th class="cell">Product</th>
                                <th class="cell">Customer</th>
                                <th class="cell">Date</th>
                                <th class="cell">Status</th>
                                <th class="cell">Total</th>
                                <th class="cell"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="cell">#15346</td>
                                <td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat erat</span></td>
                                <td class="cell">John Sanders</td>
                                <td class="cell"><span>17 Oct</span><span class="note">2:16 PM</span></td>
                                <td class="cell"><span class="badge bg-success">Paid</span></td>
                                <td class="cell">$259.35</td>
                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                            </tr>

                            <tr>
                                <td class="cell">#15344</td>
                                <td class="cell"><span class="truncate">Pellentesque diam imperdiet</span></td>
                                <td class="cell">Teresa Holland</td>
                                <td class="cell"><span class="cell-data">16 Oct</span><span class="note">01:16 AM</span></td>
                                <td class="cell"><span class="badge bg-success">Paid</span></td>
                                <td class="cell">$123.00</td>
                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                            </tr>

                            <tr>
                                <td class="cell">#15343</td>
                                <td class="cell"><span class="truncate">Vestibulum a accumsan lectus sed mollis ipsum</span></td>
                                <td class="cell">Jayden Massey</td>
                                <td class="cell"><span class="cell-data">15 Oct</span><span class="note">8:07 PM</span></td>
                                <td class="cell"><span class="badge bg-success">Paid</span></td>
                                <td class="cell">$199.00</td>
                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                            </tr>


                            <tr>
                                <td class="cell">#15341</td>
                                <td class="cell"><span class="truncate">Morbi vulputate lacinia neque et sollicitudin</span></td>
                                <td class="cell">Raymond Atkins</td>
                                <td class="cell"><span class="cell-data">11 Oct</span><span class="note">11:18 AM</span></td>
                                <td class="cell"><span class="badge bg-success">Paid</span></td>
                                <td class="cell">$678.26</td>
                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                            </tr>

                            </tbody>
                        </table>
                    </div><!--//table-responsive-->
                </div><!--//app-card-body-->
            </div><!--//app-card-->
        </div><!--//tab-pane-->

        <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
            <div class="app-card app-card-orders-table mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 text-left">
                            <thead>
                            <tr>
                                <th class="cell">Order</th>
                                <th class="cell">Product</th>
                                <th class="cell">Customer</th>
                                <th class="cell">Date</th>
                                <th class="cell">Status</th>
                                <th class="cell">Total</th>
                                <th class="cell"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="cell">#15345</td>
                                <td class="cell"><span class="truncate">Consectetur adipiscing elit</span></td>
                                <td class="cell">Dylan Ambrose</td>
                                <td class="cell"><span class="cell-data">16 Oct</span><span class="note">03:16 AM</span></td>
                                <td class="cell"><span class="badge bg-warning">Pending</span></td>
                                <td class="cell">$96.20</td>
                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div><!--//table-responsive-->
                </div><!--//app-card-body-->
            </div><!--//app-card-->
        </div><!--//tab-pane-->
        <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
            <div class="app-card app-card-orders-table mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 text-left">
                            <thead>
                            <tr>
                                <th class="cell">Order</th>
                                <th class="cell">Product</th>
                                <th class="cell">Customer</th>
                                <th class="cell">Date</th>
                                <th class="cell">Status</th>
                                <th class="cell">Total</th>
                                <th class="cell"></th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td class="cell">#15342</td>
                                <td class="cell"><span class="truncate">Justo feugiat neque</span></td>
                                <td class="cell">Reina Brooks</td>
                                <td class="cell"><span class="cell-data">12 Oct</span><span class="note">04:23 PM</span></td>
                                <td class="cell"><span class="badge bg-danger">Cancelled</span></td>
                                <td class="cell">$59.00</td>
                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                            </tr>

                            </tbody>
                        </table>
                    </div><!--//table-responsive-->
                </div><!--//app-card-body-->
            </div><!--//app-card-->
        </div><!--//tab-pane-->
    </div>
@endsection
