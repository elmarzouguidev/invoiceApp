<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
    <div class="app-card app-card-orders-table shadow-sm mb-5">
        <div class="app-card-body">
            <div class="table-responsive">
                <table class="table app-table-hover mb-0 text-left">
                    <thead>
                        <tr>
                            <th class="cell">REF</th>
                            <th class="cell">Raison sociale</th>
                            <th class="cell">Télephone</th>
                            <th class="cell">E-mail</th>
                            <th class="cell">I.C.E</th>
                            <th class="cell">R.C</th>
                            <th class="cell"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td class="cell">{{$customer->code}}</td>
                                <td class="cell"><span class="truncate">{{$customer->name}}</span></td>
                                <td class="cell">{{$customer->telephone}}</td>
                                <td class="cell">{{$customer->email}}</td>
                                <td class="cell">{{$customer->ice}}</td>
                                <td class="cell">{{$customer->rc}}</td>
                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--//table-responsive-->

        </div>
        <!--//app-card-body-->
    </div>
    <!--//app-card-->
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
    </nav>
</div>
