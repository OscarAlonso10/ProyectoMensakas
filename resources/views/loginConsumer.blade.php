<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bsvalidate/style.css">
</head>
<body>
    <div class="container">
       <div id="demo-of-custom-msgs" class="section">
        <h2>Consumer</h2>
        <div>
          <div>
            <div id="customMessagesExampleDemo">
              <form id="customMessagesForm" action="saveinfo.aspx" method="post" class="well">
                <div class="form-group">
                  <label class="control-label">Enter Your Name</label>
                  <input type="text" name="name" class="form-control" />
                </div>

                <div class="form-group">
                  <label class="control-label">Enter Email</label>
                  <input type="text" name="email" class="form-control" />
                </div>

                <div class="form-group">
                  <label class="control-label">Please Confirm Email</label>
                  <input type="text" name="emailConfirm" class="form-control" />
                </div>

                <div class="form-group">
                  <label class="control-label">location</label>
                  <input type="text" name="location" class="form-control" />
                </div>

                <div class="form-group">
                  <label class="control-label">Phone</label>
                  <input type="tel" name="phone" class="form-control" />
                </div>

                <div class="form-group">
                  <input type="submit" class="btn btn-danger" value="Save Info" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bsvalidate/jquery.bsvalidate.js"></script>
    <script type="text/javascript" src="js/bsvalidate/main.js"></script>
</body>
</html>

