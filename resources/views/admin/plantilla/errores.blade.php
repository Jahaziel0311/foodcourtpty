<div class="col-lg-12 ">    

    @error('danger')
    <div class="alert alert-danger"> <i class="icon-Danger"></i> No se pudo crear el Restaurante. {{$message}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    </div>
    @enderror

    @error('success')
        <div class="alert alert-success"> <i class="fas fa-check"></i> {{$message}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
    @enderror
    {{-- 
    
    <div class="alert alert-warning"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    </div>
    <div class="alert alert-info"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    </div> --}}
</div>