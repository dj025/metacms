<?php $this->Layout('Layout/admin') ?>
<div class="panel panel-default">
    <div class="panel-body">
        <div class="col-md-12">
            <?=\metacms\web\Form::getInstance()->create()?>
                <div class="form-group">
                    <label class="col-sm-2 control-label">操作</label>

                    <div class="col-sm-10">
                        <button type="submit" data-power="admin/Flink/addFlink" class="btn btn-success ">保存</button>
                        <button type="reset" class="btn btn-danger ml10">重置</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('form[name=autoform]').ajaxForm({
        dataType: 'json',
        error: function () {
            layer.msg('服务器无法连接');
        },
        success: function (data) {
            layer.alert(data.msg);
            if(data.status==1){
                setTimeout(function () {
                    window.history.go(-1)
                }, 2000);
            }
        }
    });
</script>