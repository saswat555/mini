
<style>

/* Button used to open the chat form - fixed at the bottom of the page */
.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
  font-size:25px;
	background-color:cyan;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}

.my-float{
	margin-top:22px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btnn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btnn:hover, .open-button:hover {
  opacity: 1;
}

</style>


<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">CSE </h2>
              <p>The Department of ISE will create high quality professionals in Computer Science & Engineering and to foster leading edge research and to equip students to succeed and contribute to industry and society.</p>

            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Events</h2>
              <ul class="list-unstyled">
                <li><a href="#technical" class="py-2 d-block">Technical</a></li>
                <li><a href="#gaming" class="py-2 d-block">Gaming</a></li>
                <li><a href="#onstage" class="py-2 d-block">On Stage</a></li>
                <li><a href="#offstage" class="py-2 d-block">Off Stage</a></li>
                
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="registration.php" class="py-2 d-block">Registration</a></li>
                <li><a href="#events" class="py-2 d-block">events</a></li>
                
                <li><a href="about.php" class="py-2 d-block">Avout Us</a></li>
              </ul>
            </div>
          </div>

        </div>
   
        </div>
      </div>
    </footer>
    
    <button href="#" class="float ftco-animate" onclick="openForm()">
    <span class="icon-chat"></span>
  </button>
    

</form>
</div>

    