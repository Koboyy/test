
<form action="{{ route($route, $params) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="btn btn-danger btn-sm" title="Delete">
        <i class="fa fa-trash"></i>
    </button>
</form>
