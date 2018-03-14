<div class="row">
    <div class="col-lg-12 margin-tb">
        
            <center>
            <h2> Set Operator for this ticket</h2>
            </center>
        
</div>
</div>

<form method="post" action="<?php echo base_url('CustomerPortal/adminticketupdate/'.$adminticket->ticket_id);?>">

    <?php

    if ($this->session->set_flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }

    ?>
<br>
<br>
    <div class="row">
        <div class="col-xs-5 col-sm-5 col-md-5"></div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <select class="form-control">
                <strong> Set Operator </strong>
                <?php foreach($groups as $each){ ?>
                    <option value="<?php echo $each->full_user_name; ?>"><?php echo $each->full_user_name; ?></option>;
                }
            <?php } ?>
            </select>
        </div>
    </div>
<br>
<br>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <center>
                <button type="submit" class="btn btn-primary">Update Operator</button>
                </center>
        </div>
        <br>
        <br>
        <center>
        <a class="btn btn-primary" href="<?php echo base_url('CustomerPortal/adminticketindex');?>">Back</a>
        </center>
    </div>
</form>