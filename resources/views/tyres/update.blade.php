<form method="POST" action="/tyreupdate">           
@csrf

            <table>
                 <input type="hidden" name="id" value="{{ $tdata['id']}}">
                 
                <tr>
                    <td>SRN </td>
                    <td><input type="text"  name="srn" placeholder="SRN" value="{{ $tdata['srn']}}" required/></td>
                </tr>
                <tr>
                    <td>Tyre No</td>
                    <td><input type="text"  name="tyreno" placeholder="Tyre No" value="{{ $tdata['tyreno']}}" required/></td>
                </tr>
                <tr>
                    <td>Model</td>
                    <td><input type="number" min="2000" name="model"  placeholder="Model" value="{{ $tdata['model']}}" required/></td>
                </tr>
                <tr>
                    <td for="status">Status</td>
                  <td>
                    <select id="status" name="status">
                      <option value="{{ $tdata['status']}}">In Service</option>
                      <option value="{{ $tdata['status']}}">Out Of Service</option>
                    </select> 
                  </td>
                </tr>
                <tr>
                    <td for="condition">Condition</td>
                  <td>
                    <select id="condition" name="condition">
                      <option value="{{ $tdata['condition']}}">Very Bad</option>
                      <option value="{{ $tdata['condition']}}">Bad</option>
                      <option value="{{ $tdata['condition']}}">Good</option>
                      <option value="{{ $tdata['condition']}}">Very Good</option>
                     
                    </select> 
                  </td>
                </tr>
                <tr>
                    <td for="type">Type</td>
                  <td>
                    <select id="type" name="type">
                      <option value="{{ $tdata['type']}}">Tube</option>
                      <option value="{{ $tdata['type']}}">Tubeless</option>
                     
                    </select> 
                  </td>
                </tr>
               
                <tr>
                    <td>Amount</td>
                    <td><input type="number" min="0" name="amount"  placeholder="Amount" value="{{ $tdata['amount']}}" required/></td>
                </tr>
                <tr>
                    <td>Vehicle_id </td>
                    <td><input type="number" min="1" name="vehicle_id"  placeholder="Vehicle_id" value="{{ $tdata['vehicle_id']}}" required/></td>
                </tr>
                                 
                <tr>
                    <td colspan="2">
                        <input class="btn btn-theme btn-large e_swing" type="submit" value="UPDATE" name="btn">
                    </td>
                </tr>
            </table>
        </form>
        