<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel = "stylesheet">
    <title>Metro style</title>
</head>
<body>

    <div id ="main-container">
        <div class = "tile-long city-image">
             <div><span class="first-word">W</span>eb<span class="first-word">A</span>pplication<span class="first-word">T</span>echnologies</div>
        </div>

        <div  class = "tile red">
             <h2 id ="top_header">Links</h2>
               <ul class="tile-list ">
                   <li><a href = "https://google.com">Chubkins</a></li>
                   <li><a href = "https://www.w3schools.com/">W3 Schools</a></li>
                   <li><a href = "https://developer.mozilla.org/en-US/docs/Learn">Learn Web Dev</a></li>
                   <li><a href = "https://www.w3schools.com/colors/colors_names.asp">Color References</a></li>
                </ul>
        </div>

        <div class = "tile yellow">
            <div>WAT Lecture</div>
            <div class = "event-hour">12:00 - 13:00 LTB</div>
            <div class = "event-date">Every<span class = "event-day">WED</span></div>
        </div>

        <div class = "tile-long green"> 
            <h2 id = "header-middle">WAT Assessment</h2>
            <table id ="users-table">
                 <thead>
                     <tr> 
                         <th>Title</th>
                         <th>Weight</th>
                         <th>Due</th>
                     </tr>
                 </thead>  
                 <tbody>
                     <tr>
                         <td>Work in progress</td>
                         <td>20%</td>
                         <td>See VLE</td>
                     </tr><tr>
                         <td>Portfolio</td>
                         <td>50%</td>
                         <td>See VLE</td>
                     </tr><tr>
                         <td>Phase Exam</td>
                         <td>30%</td>
                         <td>See VLE</td>
                     </tr>
                 </tbody>                    
            </table>
        </div>

        <div class = "tile-long lightgrey">
          <h2 id ="last_header">Search for Property</h2>
            <form class=" container">
               <div>
                    <label>Location:</label>
                    <input type ="text" placeholder="e.g.this or that"/>
               </div>
               <div>
                    <label>Category:</label>
                      <select>
                        <option>Flat </option>
                        <option>Apartment</option>
                        <option>Rooms</option> 
                      </select>
                    <label>Beds:</label>
                    <input type = "number" value ="4" min ="1" max ="99"/>
                </div>
                <div>
                    <input type="radio" name="Property" value="P" checked/>Price
                    <input type="radio" name="Property" value="B" />Beds
                    <input type="radio" name="property" value="A" />Alpha
                </div>
                <div>
                    <button type = "submit">Submit</button>
                </div>
            </form>
        </div>
        </div>
</body>
</html>