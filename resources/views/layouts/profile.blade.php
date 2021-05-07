@include('layouts.link');
@include('layouts.app');
<link rel="stylesheet" href="{{asset('/css/profile.css')}}">
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" src="{{asset('images/isa.jpeg')}}" width="200px" >
                <span class="font-weight-bold">Isaiah Oboh</span>
                <span class="text-black-50">isaiah@gmail.com</span><span></span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels ">Name</label>
                        <input type="text" class="form-control" placeholder="Full name" value=""></div>
                    <div class="col-md-6"><label class="labels">Surname</label>
                        <input type="text" class="form-control" value="" placeholder="surname"></div>
                </div>


                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels glyphicon glyphicon-phone">Phone Number</label>
                        <input type="text" class="form-control " placeholder="" value="+2349033830383" readonly></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter address" value=""></div>
                    <div class="col-md-12 " ><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div>
 <div class="mt-5 text-center"><a href="{{route('update')}}"><button class="btn btn-primary profile-button"type="button">update Profile</button></a></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">

                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span>
                    <span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label>
                    <input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label>
                    <input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
