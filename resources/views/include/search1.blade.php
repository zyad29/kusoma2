<form style="text-align: center" action="{{route('produits.search')}}" class="d-flex">
    <div class="form-group mb-0 mr-1">
        <input type="text" name="q" class="form-control" value="{{request()->q ?? ''}}">
    </div>
    
    <button style="border-radius:10%" type="submit" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>
</form>