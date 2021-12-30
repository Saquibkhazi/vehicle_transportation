<form method="POST" action="/fuelupdate">
@csrf

            <table>
                 <input type="hidden" name="id" value="{{ $fdata['id']}}">
                <tr>
                    <td>filled_at</td>
                    <td><input type="date"  name="filled_at" value="{{ $fdata['filled_at']}}" placeholder="filled_at"/></td>
                </tr>
                <tr>
                    <td>quantity</td>
                    <td><input type="number"  min="1" name="quantity" value="{{ $fdata['quantity']}}" placeholder="quantity"/></td>
                </tr>
                <tr>
                    <td>amount</td>
                    <td><input type="number" min="1" name="amount" value="{{ $fdata['amount']}}" placeholder="amount"/></td>
                </tr>
                <tr>
                    <td>vehicle_id</td>
                    <td><input type="number" min="1" name="vehicle_id" value="{{ $fdata['vehicle_id']}}" placeholder="vehicle_id"/></td>
                </tr>
               
                
                       
                <tr>
                    <td colspan="2">
                        <input class="btn btn-theme btn-large e_swing" type="submit" value="UPDATE" name="btn">
                    </td>
                </tr>
            </table>
        </form>
        