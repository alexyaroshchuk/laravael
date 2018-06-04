@extends('layouts.start')

@section('content') 
<!-- <div class="container">
        <div class="regisrtration">
            <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal1" onclick="revealRegister()">
                Add
            </button>
        </div>
        <div class="modal" id="modal1" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="form-horizontal">
                        <div class="modal-header">
                            <h2>Create Settlement Sheet</h2>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label col-xs-3" for="id_worker">ID worker :</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="id_worker" placeholder="Input Id">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-xs-3" for="annual_leave">Count annual leave:</label>
                            <div class="col-xs-9">
                            <input type="text" class="form-control" id="annual_leave" placeholder="input annual leave">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3" for="sick_leave">Count sick leave:</label>
                            <div class="col-xs-9">
                                <input type="tel" class="form-control" id="sick_leave" placeholder="Input sick Leave">
                            </div>
                        </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3" for="awards_fine">Awards:</label>
                                <div class="col-xs-9">
                                    <input type="tel" class="form-control" id="awards_fine" placeholder="Input awards">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3" for="hours">Hours:</label>
                                <div class="col-xs-9">
                                    <input type="tel" class="form-control" id="hours" placeholder="Input hours on work">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3" for="pay_date">Pay date:</label>
                                <div class="col-xs-9">
                                    <input type="tel" class="form-control" id="pay_date" placeholder="Inpute pay date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3" for="id_taxes">ID taxes:</label>
                                <div class="col-xs-9">
                                    <input type="tel" class="form-control" id="id_taxes" placeholder="Input id_taxes">
                                </div>
                            </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input type="submit" class="btn btn-primary" value="Add">
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
</div>

<script type="text/javascript">
        function revealRegister() {
            var modal = document.getElementById('modal1');
            modal.style.display = "block";
        }
</script> -->

        <div class="form">
            <form method="POST" action="{{route('storeSS')}}">
              <div class="form-group">
                <label for="title">id worker</label>
                <input type="text" class="form-control" id="title" name="id_worker" placeholder="annual_leave">
              </div>
              <div class="form-group">
                <label for="title">annual_leave</label>
                <input type="text" class="form-control" id="title" name="annual_leave" placeholder="annual_leave">
              </div>
              <div class="form-group">
                <label for="alias">sick_leave</label>
                <input type="text" class="form-control" id="alias" name="sick_leave" placeholder="sick_leave">
              </div>
              <div class="form-group">
                <label for="alias">awards_fine</label>
                <input type="text" class="form-control" id="alias" name="awards_fine" placeholder="awards_fine">
              </div>
              <div class="form-group">
                <label for="alias">hours</label>
                <input type="text" class="form-control" id="alias" name="hours" placeholder="hours">
              </div>
              <div class="form-group">
                <label for="alias">pay_date</label>
                <input type="text" class="form-control" id="alias" name="pay_date" placeholder="pay_date">
              </div>
              <div class="form-group">
                <label for="alias">id_taxes</label>
                <input type="text" class="form-control" id="alias" name="id_taxes" placeholder="id_taxes">
              </div>
             
              
              <button type="submit" class="btn btn-default">Добавить</button>
              
               {{ csrf_field() }}                 
            </form>
        </div>
@endsection 