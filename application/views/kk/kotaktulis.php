<div class="inner-body">
    <div class="inner-toolbar clearfix">
        <ul>
            <li>
                <a href="#"><i class="fa fa-send-o mr-sm"></i> Kirim</a>
            </li>
            <a href="#"><i class="fa fa-paperclip mr-sm"></i> Lampirkan</a>
            </li>
        </ul>
    </div>
    <br><br>
    <div class="mailbox-compose">

        <form class="form-horizontal form-bordered form-bordered">

            <div class="form-group">
                <label class="col-md-1 control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kepada:</label>
                <div class="col-sm-offset-2 col-sm-9 col-md-offset-1 col-md-10">
                    <select class="form-control" multiple="multiple" data-plugin-multiselect id="ms_example0">
                        <option value="rt">RT</option>
                        <option value="rw">RW</option>
                        <option value="kel">Kelurahan</option>
                    </select>
                </div>
            </div>

            <div class="form-group form-group-invisible">
                <label for="subject" class="control-label-invisible">Subject:</label>
                <div class="col-sm-offset-2 col-sm-9 col-md-offset-1 col-md-10">
                    <input id="subject" type="text" class="form-control form-control-invisible" value="">
                </div>
            </div>



            <div class="form-group">
                <div class="compose">
                    <div id="compose-field" class="compose-control">
                    </div>
                    <textarea class="form-control" id="message" name="body" rows="12" placeholder="Tulis pesan"></textarea>

                </div>
            </div>
        </form>
    </div>
</div> 