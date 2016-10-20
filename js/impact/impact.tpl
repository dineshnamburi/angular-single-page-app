<div ng-include="'js/header/header.tpl'"></div>
<section id="banner" style="background-image: url(assets/images/overlay.png), url(images/cms/{{data.image}}); height:200px!important;">
	<h2>{{data.name}}</h2>
	<p>{{data.description}}</p>
</section>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 col-xl-12">
				<p class="text-left" ng-bind-html="data.content"></p>
                <p class="text-left" ng-bind-html="data.content2"></p>
			</div>
			<div class="col-md-6 col-md-offset-3">
                <form class="form-horizontal" name="careerForm">
  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" name="name" ng-model="name" class="form-control" id="inputName" placeholder="Name" required>
    </div>
  </div>
 <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" ng-model="email" class="form-control" id="inputEmail" placeholder="Email" required>
    </div>
  </div>  
<div class="form-group">
    <label for="inputMobile" class="col-sm-2 control-label">Mobile</label>
    <div class="col-sm-10">
      <input type="text" name="phone" ng-model="phone" class="form-control" id="inputMobile" placeholder="Mobile" required>
    </div>
  </div>  
<div class="form-group">
    <label for="inputApplying" class="col-sm-2 control-label">Applying For:</label>
    <div class="col-sm-10">
      <input type="text" name="applying_for" ng-model="applying_for" class="form-control" id="inputApplying" placeholder="Please Type Job Profile" required>
    </div>
  </div>  
<div class="form-group">
    <label for="inputMessage" class="col-sm-2 control-label">Message</label>
    <div class="col-sm-10">
        <textarea name="message" ng-model="message" class="form-control" id="inputMessage" placeholder="Your Message"></textarea>
    </div>
  </div>
                    <div class="form-group">
    <label for="inputResume" class="col-sm-2 control-label">Resume</label>
    <div class="col-sm-10">
        <input type="file" name="resumeFile"  id="inputResume" ng-model="resume" ngf-select    
             accept=".doc,.docx,.pdf" ngf-max-size="2MB" required
             ngf-model-invalid="errorFile" >
        <i ng-show="careerForm.file.$error.required">*required</i><br>
      <i ng-show="careerForm.file.$error.maxSize">File too large 
          {{errorFile.size / 1000000|number:1}}MB: max 2M</i>
        <p class="help-block">Please Upload your updated resume. (doc,docx.pdf)</p>
    </div>
  </div>
                    
				<div class="text-center"><button ng-disabled="!careerForm.$valid" 
              ng-click="uploadPic(resume)" class="btn btn-primary">Submit</button>
                    <span class="progress" ng-show="resume.progress >= 0">
        <div style="width:{{resume.progress}}%" 
            ng-bind="resume.progress + '%'"></div>
      </span>
      <span ng-show="resume.result">Your Application has been submited successfully!. We will call you if you are shortlisted.</span>
      <span class="err" ng-show="errorMsg">{{errorMsg}}</span>
                    </div>
                </form>
                
               
			</div>
		</div>
	</div>
</section>
<div ng-include="'js/footer/footer.tpl'"></div>