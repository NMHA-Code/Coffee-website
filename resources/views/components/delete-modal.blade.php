<!-- Modal Xác nhận xóa -->
<button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $id }}">
    Delete
</button>

<div class="modal fade" id="deleteModal{{ $id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="{{ $route }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')   
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Xác nhận xóa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Bạn có chắc chắn muốn xóa <strong>{{ $name }}</strong> không?</p>
                    <small class="text-danger">Hành động này không thể hoàn tác!</small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-danger">Xóa vĩnh viễn</button>
                </div>
            </div>
        </form>
    </div>
</div>