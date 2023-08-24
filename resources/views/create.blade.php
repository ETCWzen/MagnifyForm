<form action="/create" method="post:">
    @csrf
    <label for="name">Full Name:</label>
    <input type="text" name="name"></br>

    <label for="identity">Id Number:</label>
    <input type="element" name="identity"></br>

    <label for="department">Pick your department:</label>
    <select id="department" name="department"> </br>
    <option value="accounting">Accounting</option>
    <option value="regStaff">Staff</option>
    <option value="management">Management</option>
    <option value="infoTech">IT</option>
    </select>

    <label for="employmentStatus">Employment Status:</label>


    <label for="title">Email Address:</label>
    <input type="email" name="Email"></br>

    <label for="file">Select File for Upload</label>
    <input type="file" id="file" name="file"></br>
    <button>Send</button>
</form>


