<div class="card shadow-sm border-0">
    <div class="card-header d-flex justify-content-between align-items-center bg-dark" id="heading">
        <h5 class="mb-0">
         <button class="btn btn-link text-decoration-none text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseItems" aria-expanded="false" aria-controls="collapseItems">
          Mostrar Despesas Recentes
        </button>
        </h5>
    </div>
    <div id="collapseItems" class="collapse border border-dark show" aria-labelledby="heading" data-bs-parent="#accordion">
        <div class="card-body ">
            <div class="d-flex flex-column gap-3">                
                <div class="card shadow-sm border-0 h-25">
                    @foreach ($last_expenses as $expense)
                    <div class="card-body d-flex flex-column gap-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0"><i class="bi bi-receipt me-2"></i>{{$expense['description']}}</h5>
                            <span class="badge bg-danger bg-opacity-10 text-danger fw-semibold">
                            <i class="bi bi-currency-dollar me-1"></i>{{$expense['price']}}
                            </span>
                        </div>

                        <div class="d-flex align-items-center text-muted small">
                            <i class="bi bi-tag me-2"></i>
                            <span class="me-3">{{$expense['category']}}</span>

                            <i class="bi bi-repeat me-2"></i>
                            <span class="me-3">{{$expense['frequency']}}</span>

                            <i class="bi bi-calendar-event me-2"></i>
                            <span>{{$expense['due_date']}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>