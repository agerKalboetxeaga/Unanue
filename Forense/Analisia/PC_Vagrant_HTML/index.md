
<div class='page'>
   <h1 class='title level-1'>PC_Vagrant</h1><br/>
  <img style="width:10rem; heigth:10rem;" src="https://imgs.search.brave.com/rQ7duCOCPap4IilQy5pP_swlfM22o3sDuBBM14zeL2M/rs:fit:290:300:1/g:ce/aHR0cHM6Ly9kYW5p/ZWxlLnRlY2gvd3At/Y29udGVudC91cGxv/YWRzLzIwMjAvMDYv/dmFncmFudC1sb2dv/LUIyMTRGNDc2MzYt/c2Vla2xvZ28uY29t/Xy5wbmc"/>
</div>
<div class='page'>
  <h2 class='title level-2'>1.- Volatility</h1><br/>
  <img style="width:15rem; heigth:15rem;" src="https://imgs.search.brave.com/dl9Sp69c6Hh-IfFC1IXHmKJ2EVHT_Nr8lPgWrzYtibI/rs:fit:800:612:1/g:ce/aHR0cHM6Ly93d3cu/ZGlnaXRhbGZvcmVu/c2ljcy5jb20vYmxv/Zy93cC1jb250ZW50/L3VwbG9hZHMvMjAx/Ni8xMS8xNDExMjAx/Ni5qcGc"/>
</div>
<div class='page'>
  <h3 class='title level-3'>1.- ImageInfo</h1><br/>
  <p><img src="images/2-1.png" alt="images/2-1.png" /></p>
  <p></p><p>- Zela eta win2008R2SP1x64 sistema agertzen den hau artuko dugu ondorengo probak egiteko</p>
</div>
<div class='page'>
  <h1 class='title level-3'>2.- PSScan</h1><br/>
  <p><img src="images/4-1.png" alt="images/4-1.png" />
    <img src="images/4-2.png" alt="images/4-2.png" />
  </p><p></p>
  <p>- Prozesuak ikusita iadanik sospetxoso batzuk agertu dira </p>
</div>
<div class='page'>
  <h1 class='title level-3'>3.- ProcDump</h1><br/>
  <p><img src="images/6-1.png" alt="images/6-1.png" /></p>
</div>
<div class='page'>
  <h1 class='title level-4'>kUNLuXT strings</h1><br/>
  <p><img src="images/9-1.png" alt="images/9-1.png" /></p>
  <p></p><p> - Lehenik CMD a eskuratzen sahiatzen da eta ostean Zerbitzua hasita ez badago hazten du.</p>
</div>
<div class='page'>
  <h1 class='title level-4'>zofVFH strings</h1><br/>
  <p><img src="images/10-1.png" alt="images/10-1.png" /></p><p></p>
  <p>- Aurreko kasu berdina. Programak haria sortzen du, ostean prozesua, Command line bat hartzen sahiatzen da eta ondoren zerbitzu bat ezartzen sahiatzen da.</p></div>
<div class='page'>
  <h1 class='title level-4'>Malware CMD LINES</h1><br/>
  <p><img src="images/19-1.png" alt="images/19-1.png" /></p>
</div>
<div class='page'>
  <h1 class='title level-3'>4.- DllLISt</h1><br/>
  <p><img src="images/7-1.png" alt="images/7-1.png" /></p><p></p>
  <p><img src="images/7-2.png" alt="images/7-2.png" /></p>
</div>
<div class='page'>
  <h1 class='title level-3'>5.- NetScan</h1><br/><p></p>
  <p><img src="images/8-1.png" alt="images/8-1.png" /></p>
  <p><img src="images/8-2.png" alt="images/8-2.png" /></p><p></p>
  <p>- Hemen, programa honek nola 192.168.56.15 makinara 5454 porturako konekxioa ixten dela ikusi dezakegu, eta hortik gutxira, makina biktimak syn eskaera bat bidaltzen dio atakantearen makinari</p><p></p><p></p>
  <p><img src="images/8-3.png" alt="images/8-3.png" /></p><p></p>
  <p>- Hemen, beste backdor batera konektatzen nahian dagoela ikusi dezakegu. Oraingoan 4444 portura</p>
</div>
<div class='page'>
  <h1 class='title level-2'>2.- NetworkMiner</h1><br/>
  <img style="width:15rem; heigth:15rem;" src="https://imgs.search.brave.com/bj5LVV8qQhkvozZJvgWFo4lgjWkmVMZLLsQjfn6AOy0/rs:fit:1200:630:1/g:ce/aHR0cHM6Ly8xLmJw/LmJsb2dzcG90LmNv/bS8tVGxEWmQ1aThr/eG8vV1BHXzBXdGZE/Y0kvQUFBQUFBQUFK/aWsvTGZMQS1vcmN6/SU14RUpWblZLOERG/STJvRlVFWmdLM1l3/Q0xjQi93MTIwMC1o/NjMwLXAtay1uby1u/dS9OZXR3b3JrTWlu/ZXIuanBn"/>
</div>
<div class='page'>
  <h1 class='title level-3'>1.- Nmap Scanning</h1><br/>
  <p><img src="images/14-1.png" alt="images/14-1.png" /></p><p></p><p>	- Hasieratik nmap eskaneo bat martxan dagoela salatzen digu</p><p>	</p>
  <p>	<img src="images/14-2.png" alt="images/14-2.png" /></p><p>	</p>
  <p>	Kredentzial batzuen lapurreta dagoela ikusi dezakegu CIFS Setup AndX Request (smb baten kredentzialak uste dut) guest:6A17153E5EA4E90F06F08E218D95DDDD02A8B90C5E0A7C76</p><p>	</p>
  <p>	<img src="images/14-3.png" alt="images/14-3.png" /></p><p>	</p>
  <p>		- Nmap eskaneoak egin dituen galderak (zarata asko egiten du!)</p><p>		</p>
  <p>		<img src="images/14-4.png" alt="images/14-4.png" /></p><p>		</p>
  <p>		 Ikusi dezakegunez hakerra iadanik jugeton dago</p>
</div>
<div class='page'>
  <h1 class='title level-3'>2.- Backdoor kaptura (Eternal Blue)</h1><br/>
  <p><img src="images/15-1.png" alt="images/15-1.png" /></p><p></p>
  <p>-	Hemen atakanteak erabili duen reverse shell- aren aztarnak agertzen dira. Datu hauekin badakigu metasploit erabiltzen dagoela eta Vagrant sisteman iadanik sartuta dagoela. Shell honek atakantearen 4444 portura dago apuntatuta. Baliteke hau persistentziaren shell a izatea</p><p></p>
  <p><img src="images/15-2.png" alt="images/15-2.png" /></p><p></p>
  <p>-	DNS an gauza arraroak ikusi ditzakegu</p><p></p>
  <p><img src="images/15-3.png" alt="images/15-3.png" /></p><p></p>
  <p>- Hemen makina atakanteak +1700 konekxio egiten ditu (3 segunduko tartean) vagrant makinarekin</p>
  <p><img src="images/15-4.png" alt="images/15-4.png" /></p><p></p>
  <p>Hemen eternal blue exploitaren saiakera bat ikusi dezakegu</p><p></p><p></p>
  <p><img src="images/15-5.png" alt="images/15-5.png" /></p><p></p><p></p>
  <p>	- Hemen Eternal blue ahultasunaren explotazioa baieztatzen dugu</p>
</div>
<div class='page'>
  <h1 class='title level-3'>3.- Backdoor Kaptura 2</h1><br/>
  <p><img src="images/16-1.png" alt="images/16-1.png" /></p><p></p>
  <p>-	No ase falta palabrass</p><p></p><p></p><p></p>
  <p><img src="images/16-2.png" alt="images/16-2.png" /></p><p></p>
  <p><img src="images/16-3.png" alt="images/16-3.png" /></p><p>-	 -	Fijatzen bagara lehenengo meterpreter sesioa eternal blue exploitaren erantzuna izango litzateke. Ondoren, 20 minutura beste meterpreter sesio bat dago, Beraz backdoor batetik konektatzen dagoela ikus dezakegu</p>
</div>
<div class='page'>
  <h1 class='title level-2'>3.- Wireshark</h1><br/>
  <img src="https://imgs.search.brave.com/jcZDsjlXAxU7MEmFD9gqjBbgRupauIYJypKYGadQYGY/rs:fit:1200:1080:1/g:ce/aHR0cHM6Ly93d3cu/bmVzYWJhbWVkaWEu/Y29tL3dwLWNvbnRl/bnQvdXBsb2Fkcy8y/MDE5LzEyL1dpcmVz/aGFyay5qcGc" style="width:15rem; heigth:15rem;"/>
</div>
<div class='page'>
  <h1 class='title level-3'>WIRESHARK Analisia</h1><br/>
  <p><img src="images/18-1.png" alt="images/18-1.png" /></p><p></p><p></p>
  <p>Konexio proba: (atakante-biktima)</p><p></p>
  <p><img src="images/18-2.png" alt="images/18-2.png" /></p><p></p>
  <p><img src="images/18-3.png" alt="images/18-3.png" /></p><p></p>
  <p> Erasotzaileak bidalitako komandoa</p><p></p>
</div>


