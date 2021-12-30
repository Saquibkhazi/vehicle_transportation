

      <form method="POST" action="/driverupdate">
@csrf

            <table>
                 <input type="hidden" name="id" value="{{ $ddata['id']}}">
                <tr>
                    <td>Driver Name</td>
                    <td><input type="text"  name="name" value="{{ $ddata['name']}}" placeholder="Driver Name"/></td>
                </tr>
                <tr>
                    <td>DOB</td>
                    <td><input type="date"  name="dob" value="{{ $ddata['dob']}}" placeholder="Date Of Birth"/></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address" value="{{ $ddata['address']}}" placeholder="Address"/></td>
                </tr>
                <tr>
                    <td for="gender">Gender</td>
                  <td>
                    <select id="gender" name="gender">
                      <option value="{{ $ddata['gender']}}">Male</option>
                      <option value="{{ $ddata['gender']}}">Female</option>
                    </select> 
                  </td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="number" name="age" value="{{ $ddata['age']}}" placeholder="Age"/></td>
                </tr>
                
               
                 <tr>
                    <td for="phone">Mobile</td>
                    <td><input type="tel"  id="phone" name="mobile_number"
                              pattern="[0-9]{10}" required value="{{ $ddata['mobile_number']}}" placeholder="Mobile" /></td>
                </tr>
                                
                <tr>
                    <td colspan="2">
                        <input class="btn btn-theme btn-large e_swing" type="submit" value="UPDATE" name="btn">
                    </td>
                </tr>
            </table>
        </form>
       
        