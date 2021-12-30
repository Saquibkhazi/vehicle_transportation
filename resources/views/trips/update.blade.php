<form method="POST" action="/tripupdate">           
@csrf

            <table>
                 <input type="hidden" name="id" value="{{ $trdata['id']}}">
                 <tr>
                    <td>Date</td>
                    <td><input type="date"  name="date" placeholder="Date" value="{{ $trdata['id']}}" required/></td>
                </tr>
                <tr>
                    <td>Source</td>
                    <td><input type="text"  name="source" placeholder="Source" value="{{ $trdata['source']}}" required/></td>
                </tr>
                <tr>
                    <td>Destination</td>
                    <td><input type="text" name="destination"  placeholder="Destination" value="{{ $trdata['destination']}}" required/></td>
                </tr>
                <tr>
                    <td>Distance</td>
                    <td><input type="number" min="1" name="distance"  placeholder="Distance" value="{{ $trdata['distance']}}" required/></td>
                </tr>
                <tr>
                    <td>Tareweight</td>
                    <td><input type="number" min="1" name="tareweight"  placeholder="Tareweight" value="{{ $trdata['tareweight']}}" required/></td>
                </tr>
                <tr>
                    <td>Netweight</td>
                    <td><input type="number" min="1" name="netweight"  placeholder="Netweight" value="{{ $trdata['netweight']}}" required/></td>
                </tr>
                <tr>
                    <td>Grossweight</td>
                    <td><input type="number" min="1" name="grossweight"  placeholder="Grossweight" value="{{ $trdata['grossweight']}}" required/></td>
                </tr>
                <tr>
                    <td>Driver_id </td>
                    <td><input type="number" min="1" name="driver_id"  placeholder="Driver_id" value="{{ $trdata['driver_id']}}" required/></td>
                </tr>
                <tr>
                    <td>Vehicle_id </td>
                    <td><input type="number" min="1" name="vehicle_id"  placeholder="Vehicle_id" value="{{ $trdata['vehicle_id']}}" required/></td>
                </tr>
             
                                 
                <tr>
                    <td colspan="2">
                        <input class="btn btn-theme btn-large e_swing" type="submit" value="UPDATE" name="btn">
                    </td>
                </tr>
            </table>
        </form>
        