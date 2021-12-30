<?php include_once "base.php";
$stu = $Stu -> find($_GET['id']);
print_r($stu);
?>
<div class="modal" tabindex="-1" id="editForm">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">編輯資料</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>
            <p>
              <label for="">姓名</label>
              <input type="text" name="name" id="name" value="<?=$stu['name'];?>">
            </p>
            <p>
              <label for="">班級</label>
              <input type="text" name="classroom" id="classroom" value="<?=$stu['classroom'];?>">
            </p>
            <p>
              <label for="">生日</label>
              <input type="text" name="birthday" id="birthday" value="<?=$stu['birthday'];?>">
            </p>
            <p>
              <label for="">座號</label>
              <input type="text" name="num" id="num" value="<?=$stu['num'];?>">
            </p>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="update(<?=$stu['id'];?>)">編輯</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
      </div>
    </div>
  </div>
</div>