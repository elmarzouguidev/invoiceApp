<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
    <div class="app-card app-card-orders-table shadow-sm mb-5">
        <div class="app-card-body">
            <div class="table-responsive">
                <table class="table app-table-hover mb-0 text-left">
                    <thead>
                        <tr>
                            <th class="cell">Référence</th>
                            <th class="cell">Client</th>
                            <th class="cell">Date d'émission</th>
                            <th class="cell">Montant Total</th>
                            <th class="cell">STATUS</th>
                            <th class="cell"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoices as $invoice)
                            <tr>
                                <td class="cell">{{ $invoice->document_number }}</td>
                                <td class="cell"><span class="truncate">{{ $invoice->customer?->name }}</span></td>
                                <td class="cell">{{ $invoice->document_date?->date('m-d-Y') }}</td>
                                <td class="cell">{{ $invoice->formated_total_price }}</td>
                                <td class="cell">{{ $invoice->status }}</td>
                                <td class="cell">
                                    <a class="btn-sm app-btn-secondary"
                                        href="{{ route('admin:invoices.edit', $invoice->uuid) }}">
                                        Edit
                                    </a>
                                </td>
                                <td class="cell">
                                    <a class="btn-sm app-btn-danger" href="#"
                                        onclick="
                                        var result = confirm('Are you sure you want to delete this invoice ?');

                                        if(result){
                                            event.preventDefault();
                                            document.getElementById('delete-invoice-{{ $invoice->uuid }}').submit();
                                        }">
                                        Supprimer
                                    </a>
                                </td>
                            </tr>
                            <form id="delete-invoice-{{ $invoice->uuid }}" method="post"
                                action="{{ route('admin:invoices.delete') }}">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="invoiceId" value="{{ $invoice->uuid }}">
                            </form>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>

    </div>

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
