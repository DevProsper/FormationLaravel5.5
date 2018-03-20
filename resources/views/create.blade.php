<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                <h4 class="modal-title" id="myModalLabel">Create Item</h4>

            </div>

            <div class="modal-body">

                <form data-toggle="validator" action="{{ route('posts.store') }}" method="POST">

                    <div class="form-group">

                        <label class="control-label" for="title">Title:</label>

                        <input type="text" name="title" class="form-control" data-error="Please enter title." required />

                        <div class="help-block with-errors"></div>

                    </div>

                    <div class="form-group">

                        <label class="control-label" for="title">Description:</label>

                        <textarea name="details" class="form-control" data-error="Please enter details." required></textarea>

                        <div class="help-block with-errors"></div>

                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn crud-submit btn-success">Submit</button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>