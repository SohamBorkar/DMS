<!-- <!DOCTYPE html>
<html>
<body>


<select id="cars" name="cars">
  <option selected>--Select--</option>
  <option value="volvo">Volvo XC90</option>
  <option value="saab">Saab 95</option>
  <option value="mercedes">Mercedes SLK</option>
  <option value="audi">Audi TT</option>
</select>

<p id="w">Choose</p>

<script>
	const select = document.getElementById("cars");
    const text = document.getElementById("w");
    
    const val = select.value;
    select.addEventListener("change", (e)=>{
    	if(e.target.value == "volvo"){
    	text.innerHTML = ``;
       }
       if(e.target.value == "saab"){
    	text.innerHTML = "Saab";
       }
       if(e.target.value == "mercedes"){
    	text.innerHTML = "mercedes";
       }
       if(e.target.value == "audi"){
    	text.innerHTML = "audi";
       }
    })
    
</script>
</body>
</html> -->










<?php
include 'assets/partials/conn.php';
?>

<div class="col-lg-8 mt-5 mt-lg-0 text-center" >

<form action="" method="post" role="form" class="">
  <div class="row gy-2 gx-md-3">
    <div class="form-group col-12">
      <input type="number" class="form-control" id="id" placeholder="Type Criminal ID" name="id"  required>
    </div>
    <div class="form-group col-12">
      <input type="text" class="form-control" name="name" id="c_name" placeholder="Type Name of Criminal" required>
    </div>
    <div class="form-group col-12">
      <input type="date" class="form-control" name="c_dob" id="c_dob" placeholder="Enter Date of Birth of Criminal" required min="100">
    </div>
    <div class="form-group col-12">
      <input type="text" class="form-control" name="casename" id="case_iname" placeholder="Type Name of Case/ Crime Committed by Criminal" required>
    </div>
    <div class="form-group col-12">
      <input type="number" class="form-control" name="previous_crimes" id="p_crimes" placeholder="Type Number of Crimes Previously Committed" required min="0">
    </div>
    <div class="form-group col-12">
      <input type="number" class="form-control" name="harm_level" id="h_level" placeholder="Type Harm Level of Criminel" required min="0">
    </div>
    <div class="form-group col-12">
        <input type="number" class="form-control" name="case_id" id="c_id" placeholder="Type Associated Case ID" required min="100">
    </div>
    <div class="my-3 col-12">
      <!--<div class="loading">Loading</div> -->
      <div class="error-message"></div>
      <div class="sent-message">Added Successfully</div>
    </div>
    <div class="text-center col-12"><button type="submit" class="btn btn-primary" name="submit">Add</button></div>
  </div>
</form>
</div>
<?php
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $dob = $_POST['c_dob'];
  $case_n = $_POST['casename'];
  $previous_c = $_POST['previous_crimes'];
  $harm_l = $_POST['harm_level'];
  $case_id = $_POST['c_id'];

  // Prepare the statement
  $stmt = $conn->prepare("INSERT INTO criminal (id, name, dob, case_n, previous_c, harm_l, case_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("isdsiii", $id, $name, $dob, $case_n, $previous_c, $harm_l, $case_id);

  // Execute the statement
  $stmt->execute();

  // Check if the statement was executed successfully
  if ($stmt->affected_rows > 0) {
    echo "<script> alert('Staff Member Added Successfully');</script>";
  } else {
    echo "Error: " . $stmt->error;
  }

  // Close the statement and connection
  $stmt->close();
  $conn->close();
}
?>