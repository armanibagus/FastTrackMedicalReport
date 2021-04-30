<!-- Modal -->
<div class="modal fade" id="deleteModal<?=$test_kit['kit_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Test Kit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Test Kit Details:<br>
                <strong>ID    : <?php echo$test_kit['kit_id']?><br></strong>
                <strong>Name  : <?php echo$test_kit['name']?><br></strong>
                <strong>Desc. : <?php echo$test_kit['description']?><br><br></strong>
                Are you sure want to delete test kit?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="../action/action-delete-test-kit.php?kit_id=<?php echo $test_kit['kit_id']?>" role="button">Delete</a>
            </div>
        </div>
    </div>
</div>