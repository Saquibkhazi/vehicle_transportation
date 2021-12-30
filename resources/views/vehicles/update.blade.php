<form method="POST" action="/vehicleupdate">  
@csrf

            <table>
                 <input type="hidden" name="id" value="{{ $data['id']}}">
                <tr>
                    <td>RTO_Number</td>
                    <td><input type="text"  name="rtonumber" value="{{ $data['rtonumber']}}" placeholder="RTO_Number"/></td>
                </tr>
                <tr>
                    <td for="type">Type</td>
                  <td>
                    <select id="type" name="type">
                      <option value="{{ $data['type']}}">JohnDeere: 400D</option>
                      <option value="{{ $data['type']}}">Isuzu: FVZ1400</option>
                      <option value="{{ $data['type']}}">Volvo: A40E</option>
                      <option value="{{ $data['type']}}">Hitachi: AH400D</option>
                      <option value="{{ $data['type']}}">Belaz 75710</option>
                      <option value="{{ $data['type']}}">Caterpillar 797F</option>
                      <option value="{{ $data['type']}}">Komatsu 980E-4</option>
                      <option value="{{ $data['type']}}">Terex MT 6300AC</option>
                    </select> 
                  </td>
                </tr>
                <tr>
                    <td>Model</td>
                    <td><input type="number" min="2000" name="model" value="{{ $data['model']}}" placeholder="Model"/></td>
                </tr>
                <tr>
                    <td for="fueltype">Fueltype</td>
                  <td>
                    <select id="fueltype" name="fueltype">
                      <option value=" {{ $data['fueltype']}}">Petrol</option>
                      <option value=" {{ $data['fueltype']}}">Diesel</option>
                    </select> 
                  </td>
                </tr>
                                
                <tr>
                    <td colspan="2">
                        <input class="btn btn-theme btn-large e_swing" type="submit" value="UPDATE" name="btn">
                    </td>
                </tr>
            </table>
        </form>       
        