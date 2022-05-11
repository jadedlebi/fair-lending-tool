<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE>NCRC - Fair Lending Tool</TITLE>

<!-- JQuery JS -->
<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>

<!-- Drop Down JS -->
<script type="text/javascript" src="js/drop_down.js"></script>

<STYLE TYPE="text/css">
<!--
#county_drop_down, #no_county_drop_down, #loading_county_drop_down
{
display: none;
}
--> 
</STYLE>

</HEAD>

<BODY>
<form name="form" action="https://public.tableau.com/app/profile/ncrc.research/viz/FairLendingToolPDF/FLTPRINT-READY" method="get">
<table width="317" border="0" align="left">
   <tr>
     <td width="100">Metro Area</td>
     <td width="217"><select id="state" name="cbsa_code">
        <option value='10420'>Akron, OH</option>
	<option value='10580'>Albany-Schenectady-Troy, NY</option>
	<option value='10740'>Albuquerque, NM</option>
	<option value='10900'>Allentown-Bethlehem-Easton, PA-NJ</option>
	<option value='12060'>Atlanta-Sandy Springs-Alpharetta, GA</option>
	<option value='12260'>Augusta-Richmond County, GA-SC</option>
	<option value='12420'>Austin-Round Rock-Georgetown, TX</option>
	<option value='12540'>Bakersfield, CA</option>
	<option value='12580'>Baltimore-Columbia-Towson, MD</option>
	<option value='12940'>Baton Rouge, LA</option>
	<option value='13820'>Birmingham-Hoover, AL</option>
	<option value='14260'>Boise City, ID</option>
	<option value='14460'>Boston-Cambridge-Newton, MA-NH</option>
	<option value='14860'>Bridgeport-Stamford-Norwalk, CT</option>
	<option value='15380'>Buffalo-Cheektowaga, NY</option>
	<option value='15980'>Cape Coral-Fort Myers, FL</option>
	<option value='16700'>Charleston-North Charleston, SC</option>
	<option value='16740'>Charlotte-Concord-Gastonia, NC-SC</option>
	<option value='16860'>Chattanooga, TN-GA</option>
	<option value='16980'>Chicago-Naperville-Elgin, IL-IN-WI</option>
	<option value='17140'>Cincinnati, OH-KY-IN</option>
	<option value='17460'>Cleveland-Elyria, OH</option>
	<option value='17820'>Colorado Springs, CO</option>
	<option value='17900'>Columbia, SC</option>
	<option value='18140'>Columbus, OH</option>
	<option value='19100'>Dallas-Fort Worth-Arlington, TX</option>
	<option value='19430'>Dayton-Kettering, OH</option>
	<option value='19660'>Deltona-Daytona Beach-Ormond Beach, FL</option>
	<option value='19740'>Denver-Aurora-Lakewood, CO</option>
	<option value='19780'>Des Moines-West Des Moines, IA</option>
	<option value='19820'>Detroit-Warren-Dearborn, MI</option>
	<option value='20500'>Durham-Chapel Hill, NC</option>
	<option value='21340'>El Paso, TX</option>
	<option value='23420'>Fresno, CA</option>
	<option value='24340'>Grand Rapids-Kentwood, MI</option>
	<option value='24660'>Greensboro-High Point, NC</option>
	<option value='24860'>Greenville-Anderson, SC</option>
	<option value='25420'>Harrisburg-Carlisle, PA</option>
	<option value='25540'>Hartford-East Hartford-Middletown, CT</option>
	<option value='26420'>Houston-The Woodlands-Sugar Land, TX</option>
	<option value='26900'>Indianapolis-Carmel-Anderson, IN</option>
	<option value='27140'>Jackson, MS</option>
	<option value='27260'>Jacksonville, FL</option>
	<option value='28140'>Kansas City, MO-KS</option>
	<option value='28940'>Knoxville, TN</option>
	<option value='29460'>Lakeland-Winter Haven, FL</option>
	<option value='29820'>Las Vegas-Henderson-Paradise, NV</option>
	<option value='30780'>Little Rock-North Little Rock-Conway, AR</option>
	<option value='31080'>Los Angeles-Long Beach-Anaheim, CA</option>
	<option value='31140'>Louisville/Jefferson County, KY-IN</option>
	<option value='31540'>Madison, WI</option>
	<option value='32580'>McAllen-Edinburg-Mission, TX</option>
	<option value='32820'>Memphis, TN-MS-AR</option>
	<option value='33100'>Miami-Fort Lauderdale-Pompano Beach, FL</option>
	<option value='33340'>Milwaukee-Waukesha, WI</option>
	<option value='33460'>Minneapolis-St. Paul-Bloomington, MN-WI</option>
	<option value='34980'>Nashville-Davidson--Murfreesboro--Franklin, TN</option>
	<option value='35300'>New Haven-Milford, CT</option>
	<option value='35380'>New Orleans-Metairie, LA</option>
	<option value='35620'>New York-Newark-Jersey City, NY-NJ-PA</option>
	<option value='35840'>North Port-Sarasota-Bradenton, FL</option>
	<option value='36260'>Ogden-Clearfield, UT</option>
	<option value='36420'>Oklahoma City, OK</option>
	<option value='36540'>Omaha-Council Bluffs, NE-IA</option>
	<option value='36740'>Orlando-Kissimmee-Sanford, FL</option>
	<option value='37100'>Oxnard-Thousand Oaks-Ventura, CA</option>
	<option value='37980'>Philadelphia-Camden-Wilmington, PA-NJ-DE-MD</option>
	<option value='38060'>Phoenix-Mesa-Chandler, AZ</option>
	<option value='38300'>Pittsburgh, PA</option>
	<option value='38900'>Portland-Vancouver-Hillsboro, OR-WA</option>
	<option value='39100'>Poughkeepsie-Newburgh-Middletown, NY</option>
	<option value='39300'>Providence-Warwick, RI-MA</option>
	<option value='39340'>Provo-Orem, UT</option>
	<option value='39580'>Raleigh-Cary, NC</option>
	<option value='40060'>Richmond, VA</option>
	<option value='40140'>Riverside-San Bernardino-Ontario, CA</option>
	<option value='40380'>Rochester, NY</option>
	<option value='40900'>Sacramento-Roseville-Folsom, CA</option>
	<option value='41620'>Salt Lake City, UT</option>
	<option value='41700'>San Antonio-New Braunfels, TX</option>
	<option value='41740'>San Diego-Chula Vista-Carlsbad, CA</option>
	<option value='41860'>San Francisco-Oakland-Berkeley, CA</option>
	<option value='41940'>San Jose-Sunnyvale-Santa Clara, CA</option>
	<option value='41980'>San Juan–Caguas–Guaynabo, PR</option>
	<option value='42540'>Scranton--Wilkes-Barre, PA</option>
	<option value='42660'>Seattle-Tacoma-Bellevue, WA</option>
	<option value='44140'>Springfield, MA</option>
	<option value='41180'>St. Louis, MO-IL</option>
	<option value='44700'>Stockton, CA</option>
	<option value='45060'>Syracuse, NY</option>
	<option value='45300'>Tampa-St. Petersburg-Clearwater, FL</option>
	<option value='45780'>Toledo, OH</option>
	<option value='46060'>Tucson, AZ</option>
	<option value='46140'>Tulsa, OK</option>
	<option value='46520'>Urban Honolulu, HI</option>
	<option value='47260'>Virginia Beach-Norfolk-Newport News, VA-NC</option>
	<option value='47900'>Washington-Arlington-Alexandria, DC-VA-MD-WV</option>
	<option value='48620'>Wichita, KS</option>
	<option value='49180'>Winston-Salem, NC</option>
	<option value='49340'>Worcester, MA-CT</option>
     </select></td>
  </tr>
  <tr>
    <td height="33">County</td>
    <td>
      <div id="county_drop_down">
        <select id="county" name="geoid5" multiple="multiple”>
          <option value="">County...</option>
        </select>
	<?php 
	header("Content-Type: text/plain");
	?>
	<?php foreach ($_GET['geoid5'] as $selectedOption) { ?>
	<?php echo $selectedOption."\n"; ?>
	<?php }  ?>
      </div>
	    <div id="no_county_drop_down">State not selected.</div>
    </td>
  </tr>
</table>
 <div><button type="submit" align="center">Get PDF</button></div>
 </form>
</BODY>
</HTML>