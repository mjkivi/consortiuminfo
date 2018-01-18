	<!-- include jQuery library -->
	<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>-->
	<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
	<!-- include Cycle plugin -->
	<script type="text/javascript" src="/scripts/jquery.cycle.all.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#clients').cycle({
				fx: 'fade',
				speed: 200,
				timeout: 2000
			});
		});
	</script>
	<style type="text/css">
		#rotating-clients {
			width: 149px;
			padding: 5px;
			text-align: center;
			font-family: Verdana, Arial, Sans-serif;
			font-size: 10px;
			background: #f2f6f6;
			height: 265px;
		}
		a.sponsor-link {
			color: #0c37c4;
		}
		#clients {
			width: 135px;
			margin: 5px auto 5px;
			display: block;
			height: 95px;
		}
		a.view-clients-list {
			font-size: 9px;
			color: #000099;
			text-transform: uppercase;
			text-decoration: none;
			padding: 2px;
			line-height: 17px;
			background: #fff;
			border: 1px solid #000099;
		}
		a:hover.view-clients-list {
			background: #000099;
			color: #fff;
		}
	</style>
	<?php
		$db = mysql_connect("localhost", "consor5", "c0n$0r667");
		//$db = mysql_connect("localhost", "root", "");
		mysql_select_db("consor5_clist", $db);
		$query = "SELECT COUNT(*) AS numrows FROM consortia_clients";
		$resultLookupRows = mysql_query($query) or die('Error, query failed');
		$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
		$numrows = $row['numrows'];
		//the db record doesn't match the reality, so overriding
		//$numrows = 125;
	?>		
	<div id="rotating-clients">
		<img src="../sponsors/gesmer-clients.png">
		Find out more about this <a href="http://www.gesmer.com/industries.php?ServiceID=9" class="sponsor-link">site's sponsor</a>
		<div style="border-bottom:1px dotted #ccc; margin: 4px 0;"></div>
		Gesmer Updegrove has represented <a href="/consortia-client-list/index.php#CLIENTLIST">more than <?php echo $numrows; ?></a> standards consortia and open source foundations, including: 
		<div id="clients">
			<a href="http://www.3dpdfconsortium.org/" target="_blank"><img src="../sponsors/3d-pdf.jpg"></a>
			<a href="http://www.acord.org/" target="_blank"><img src="../sponsors/ACORD.jpg"></a>
			<a href="https://allseenalliance.org/" target="_blank"><img src="../sponsors/allseenalliance.jpg"></a>
			<a href="https://thearea.org/" target="_blank"><img src="../sponsors/augmented-reality.png"></a>
			<a href="http://www.amwa.tv/" target="_blank"><img src="../sponsors/amwa.jpg"></a>
			<a href="http://amtso.org/" target="_blank"><img src="../sponsors/anti-malware.png"></a>
			<a href="http://www.ansi.org/" target="_blank"><img src="../sponsors/ansi.jpg"></a>
			<a href="http://www.axlestandard.org/" target="_blank"><img src="../sponsors/axle.jpg"></a>
			<a href="http://www.broadband-forum.org/" target="_blank"><img src="../sponsors/broadbandforum.jpg"></a>			
			<a href="http://carconnectivity.org/" target="_blank"><img src="../sponsors/car-connectivity.jpg"></a>
			<a href="http://casrai.org/ " target="_blank"><img src="../sponsors/casrai.jpg"></a>
			<a href="http://cirr.org/ " target="_blank"><img src="../sponsors/cirr.png"></a>
			<a href="http://www.ccianet.org/ " target="_blank"><img src="../sponsors/ccia.jpg"></a>
			<a href="http://www.cloudfoundry.org/ " target="_blank"><img src="../sponsors/cloud-foundry.png"></a>
			<a href="https://www.cncf.io/ " target="_blank"><img src="../sponsors/cloud-native.png"></a>
			<a href="http://www.coreinfrastructure.org/ " target="_blank"><img src="../sponsors/core-infrastructure-initiative.png"></a>
			<a href="http://www.commonwellalliance.org/ " target="_blank"><img src="../sponsors/logo_commonwell.png"></a>
			<a href="http://www.digitalanalyticsassociation.org/" target="_blank"><img src="../sponsors/digital-analytics-association.jpg"></a>
			<a href="http://www.dronecode.org/" target="_blank"><img src="../sponsors/dronecode.png"></a>
			<a href="http://www.thedna.org/" target="_blank"><img src="../sponsors/dna.jpg"></a>
			<a href="http://fd.io.org" target="_blank"><img src="../sponsors/fast-data.png"></a>
			<a href="http://www.first.org" target="_blank"><img src="../sponsors/first-logo.png"></a>
			<a href="https://fossbazaar.org/" target="_blank"><img src="../sponsors/FOSSBAZAAR.jpg"></a>
			<a href="http://www.gamingstandards.com/" target="_blank"><img src="../sponsors/gamingstandards.jpg"></a>
			<a href="http://www.globalplatform.org/" target="_blank"><img src="../sponsors/GLOBALPLATFORM.jpg"></a>
			<a href="http://www.greentouch.org/" target="_blank"><img src="../sponsors/greentouch.jpg"></a>
			<a href="http://www.hl7.org/" target="_blank"><img src="../sponsors/hl7.jpg"></a>			
			<a href="http://hsafoundation.com/" target="_blank"><img src="../sponsors/hsa-foundation.jpg"></a>
			<a href="https://www.hyperledger.org/" target="_blank"><img src="../sponsors/hyperledger.png"></a>
			<a href="http://www.icasi.org" target="_blank"><img src="../sponsors/icasi_logo.jpg"></a>
			<a href="http://www.idfederation.org" target="_blank"><img src="../sponsors/id-federation.jpg"></a>
			<a href="http://www.ideaconsortium.com" target="_blank"><img src="../sponsors/idea.jpg"></a>
			<a href="http://informationcard.net/" target="_blank"><img src="../sponsors/information-cards.png"></a>
			<a href="http://ivifoundation.org/" target="_blank"><img src="../sponsors/ivif.jpg"></a>
			<a href="http://js.foundation/" target="_blank"><img src="../sponsors/jsf.jpg"></a>
			<a href="http://www.kernel.org/" target="_blank"><img src="../sponsors/kernel.png"></a>
			<a href="http://www.linux.org" target="_blank"><img src="../sponsors/LINUX.jpg"></a>
			<a href="http://www.lxistandard.org/" target="_blank"><img src="../sponsors/LXI.jpg"></a>
			<a href="http://www.mgbasetalliance.org/" target="_blank"><img src="../sponsors/mbgase-t.png"></a>
			<a href="http://www.medicalalertmonitoringassociation.com/" target="_blank"><img src="../sponsors/mama_logo.png"></a>		
			<a href="https://mariadb.org/foundation/" target="_blank"><img src="../sponsors/mariadb.jpg"></a>	
			<a href="http://mobilebenchconsortium.org/ " target="_blank"><img src="../sponsors/mobilebench.jpg"></a>	
			<a href="http://midi.org/ " target="_blank"><img src="../sponsors/midi.jpg"></a>				
			<a href="http://m3aawg.org/ " target="_blank"><img src="../sponsors/mwaawg.jpg"></a>				
			<a href="http://www.nfc-forum.org" target="_blank"><img src="../sponsors/NCF.jpg"></a>
			<a href="https://www.ncoic.org" target="_blank"><img src="../sponsors/NCOIC.jpg"></a>
			<a href="http://www.niso.org" target="_blank"><img src="../sponsors/niso.jpg"></a>
			<a href="http://nodejs.org/foundation" target="_blank"><img src="../sponsors/nodejs.png"></a>
			<a href="https://www.oasis-open.org/" target="_blank"><img src="../sponsors/OASIS.jpg"></a>
			<a href="http://www.opengeospatial.org/" target="_blank"><img src="../sponsors/OGC.jpg"></a>
			<a href="http://www.olapcouncil.org/" target="_blank"><img src="../sponsors/olap.jpg"></a>
			<a href="http://www.omg.org/" target="_blank"><img src="../sponsors/omg.jpg"></a>
			<a href="http://www.openbel.org/" target="_blank"><img src="../sponsors/openbel.png"></a>
			<a href="http://opencapi.org/" target="_blank"><img src="../sponsors/opencapi.png"></a>
			<a href="http://www.opencontainers.org/" target="_blank"><img src="../sponsors/opencontainer.png"></a>
			<a href="http://www.odpi.org/" target="_blank"><img src="../sponsors/opendata-platform.png"></a>
			<a href="http://www.opendaylight.org/" target="_blank"><img src="../sponsors/logo_opendaylight.png"></a>
			<a href="http://opendof.org/" target="_blank"><img src="../sponsors/opendof.png"></a>
			<a href="http://www.openfogconsortium.org/" target="_blank"><img src="../sponsors/openfog.png"></a>
			<a href="http://opnfv.org/" target="_blank"><img src="../sponsors/openfv.png"></a>
			<a href="http://opengamingalliance.org/" target="_blank"><img src="../sponsors/open-gaming.png"></a>
			<a href="http://openid.net/" target="_blank"><img src="../sponsors/openid.jpg"></a>
			<a href="http://www.openmama.org/" target="_blank"><img src="../sponsors/openmama.jpg"></a>	
			<a href="http://openntf.org/main.nsf/" target="_blank"><img src="../sponsors/openntf.jpg"></a>	
			<a href="http://www.opensaf.org" target="_blank"><img src="../sponsors/OPENSAF.jpg"></a>
			<a href="http://www.outercurve.org" target="_blank"><img src="../sponsors/outercurve.jpg"></a>			
			<a href="https://www.pcisecuritystandards.org/" target="_blank"><img src="../sponsors/PCI.jpg"></a>
			<a href="http://www.picmg.org/" target="_blank"><img src="../sponsors/PICMG.jpg"></a>
			<a href="http://www.pistoiaalliance.org/" target="_blank"><img src="../sponsors/pistoia.jpg"></a>
			<a href="http://www.pxisa.org/" target="_blank"><img src="../sponsors/pxisa.jpg"></a>
			<a href="http://www.r-consortium.org" target="_blank"><img src="../sponsors/r-consortium.png"></a>
			<a href="http://www.rapidio.org" target="_blank"><img src="../sponsors/RAPIDIO.jpg"></a>
			<a href="http://www.readium.org" target="_blank"><img src="../sponsors/readium.jpg"></a>
			<a href="http://rfenergy.org" target="_blank"><img src="../sponsors/rf-energy-alliance.png"></a>
			<a href="http://www.sempo.org/" target="_blank"><img src="../sponsors/SEMPO.jpg"></a>
			<a href="http://sgip.org/" target="_blank"><img src="../sponsors/sgip.jpg"></a>
			<a href="http://www.smartcardalliance.org/" target="_blank"><img src="../sponsors/sca_logo.gif"></a>
			<a href="https://sgip.org/" target="_blank"><img src="../sponsors/smartgrid-interop-panel.png"></a>
			<a href="https://www.smpte.org/" target="_blank"><img src="../sponsors/smpte.jpg"></a>
			<a href="https://www.snia.org/" target="_blank"><img src="../sponsors/snia.jpg"></a>
			<a href="https://www.tizen.org/" target="_blank"><img src="../sponsors/tizen.png"></a>
			<a href="http://www.transmartfoundation.org/site/home " target="_blank"><img src="../sponsors/transmartlogo.png"></a>
			<a href="http://www.uhdalliance.org " target="_blank"><img src="../sponsors/uhd-alliance.png"></a>
			<a href="http://www.ultrahdforum.org" target="_blank"><img src="../sponsors/ultra-hd.png"></a>
			<a href="http://www.vesa.org/" target="_blank"><img src="../sponsors/VESA.jpg"></a>
			<a href="http://www.vxibus.org/" target="_blank"><img src="../sponsors/vxi.gif"></a>
			<a href="http://www.web3d.org/" target="_blank"><img src="../sponsors/web3d.png"></a>
			<a href="http://www.webanalyticsassociation.com/" target="_blank"><img src="../sponsors/waa.jpg"></a>
			<a href="https://www.wellcertified.com/" target="_blank"><img src="../sponsors/wellbuilding.png"></a>
			<a href="http://www.wirelessinnovationalliance.org/" target="_blank"><img src="../sponsors/wireless-innovation.jpg"></a>
			<a href="http://www.witeck.org/" target="_blank"><img src="../sponsors/witeck.jpg"></a>
			<a href="http://www.xbrl.org/" target="_blank"><img src="../sponsors/XBRL.jpg"></a>	
			<a href="http://www.xenproject.org/ " target="_blank"><img src="../sponsors/xen.jpg"></a>	
			<a href="http://www.yoctoproject.org/ " target="_blank"><img src="../sponsors/yocto.jpg"></a>		
		</div>
		<a href="/consortia-client-list/index.php#CLIENTLIST" class="view-clients-list">View Full Client List</a>
	</div>
