<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">添加项目</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="<?= url("code/_add_code") ?>">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">项目名称</label>
                        <input type="text" name="name" class="form-control" placeholder="应用名称" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">拉取方式</label>
                        <select name="pulling_mode" class="form-select" aria-label="Default select example">
                            <option value="SSH">SSH</option>
                            <option value="HTTPS">HTTPS</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">地址</label>
                        <input type="text" name="ssh_url" class="form-control" placeholder="URL" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">账号</label>
                        <input type="text" name="username" class="form-control" placeholder="账号">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">密码</label>
                        <input type="text" name="password" class="form-control" placeholder="URL">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">是否fortify扫描</label>
                        <select name="is_fortify_scan" class="form-select" aria-label="Default select example">
                            <option value="1">是</option>
                            <option value="0">否</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">是否semgrep扫描</label>
                        <select name="is_semgrep_scan" class="form-select" aria-label="Default select example">
                            <option value="1">是</option>
                            <option value="0">否</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">是否kunlun扫描</label>
                        <select name="is_kunlun_scan" class="form-select" aria-label="Default select example">
                            <option value="1">是</option>
                            <option value="0">否</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-info">提交</button>
                </div>
            </form>
        </div>
    </div>
</div>
