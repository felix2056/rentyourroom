@extends('layouts.app')

@section('title', 'SpareRoom - Find rooms for rent in shared accommodation')

@section('body-id', 'SUBPAGEadvancedsearch')
@section('body-class', 'PAGElistings')

@section('css')
<link rel="stylesheet" href="/css/77350867d40e0deebcb2156b43e65c1e.css">
<style>
    input.rent-input {
      box-sizing: border-box;
      max-width: 60px;
    }
</style>
@endsection

@section('content')
<main id="spareroom" class="wrap wrap--main">
    <div class="grid-4-8-4" id="mainheader">
      <div>&nbsp;</div>
      <div>
        <h1>Search for a Room or Flatmate</h1>
      </div>
      <div>&nbsp;</div>
    </div>
    <div class="grid-4-8-4">
      <aside>
        <div class="block block_standard" id="findbox">
          <div class="block_header">
            <h3>Find an ad</h3>
          </div>
          <form action="/flatshare/propertyref.pl" method="GET" class="block_content">
            <div class="advert-ref-search">
              <label class="advert-ref-search__label" for="findid">Ad ref#</label>
              <input aria-label="Search using advert reference" type="text" class="textbox" name="advert_id"
                id="findid"><button class="button button--secondary" type="Submit">Go</button>
            </div>
          </form>
        </div>
      </aside>
      <div id="maincontent">

        <div class="panel-tab">
          <a href="search_2.pl" class="panel-tab__tab ">Basic search</a>
          <a href="{{ route('flatshare.search') }}" class="panel-tab__tab  tab-active">Advanced search</a>
        </div>

        <form class=" " action="{{ route('flatshare.search') }}" method="GET" name="search_advanced" id="pageSearchForm"
          data-search-form>




          <fieldset class="fieldset">
            <legend class="form_legend form_legend--first  ">Search for a Room or Flatmate</legend>
            <div class="form_row form_row_search_for ">
              <div class="form_label">Search for</div>
              <div class="form_inputs">
                <label class="form_input form_radio" title="Search for rooms to rent">
                  <input type="radio" name="flatshare_type" CHECKED value="offered" data-search_config="offered">
                  Rooms for rent
                </label>
                <label class="form_input form_radio" title="Search for rooms wanted">
                  <input type="radio" name="flatshare_type" value="wanted" data-search_config="wanted">
                  Rooms wanted
                </label>

                <span class="form_input form_radio">
                  <label>
                    <input type="radio" name="flatshare_type" value="buddyup" data-search_config="buddyup"
                      title="Search for buddy ups">
                    Buddy ups
                  </label>
                  <span class="tooltip buddyUp" tabindex="-1">&nbsp;<i class="fas fa-info-circle"></i><span
                      class="tooltip_box"><span class="tooltip_text">Find potential buddy ups to share this property
                        with <a href="buddyups.html" title="Find out more about BuddyUps">Find out more
                          &raquo;</a></span><span class="tooltip_arrow">&nbsp;</span></span><span
                      class="tooltip_background" tabindex="-1"></span></span> </span>
              </div>
            </div>
            <div class="form_row form_row_search_by ">
              <div class="form_label">Search by</div>
              <div class="form_inputs">
                <label class="form_input form_radio" title="Search by location">
                  <input type="radio" name="location_type" CHECKED value="area" data-search_config="area">
                  Location
                </label>
                <label class="form_input form_radio" title="Search by Nigeria travel zones">
                  <input type="radio" name="location_type" value="zone" data-search_config="zone">
                  Nigeria travel zones
                </label>
                <label class="form_input form_radio" title="Search by Nigeria tube line">
                  <input type="radio" name="location_type" value="tube" data-search_config="tube">
                  Nigeria tube line
                </label>
                <label class="form_input form_radio" title="Search by commute duration">
                  <input type="radio" name="location_type" value="commuter" data-search_config="commuter">
                  Commute duration
                </label>
              </div>
            </div>
            <div class="form_row form_row_area">
              <label class="form_label  " for="search_by_location_field">Search by location</label>
              <div class="form_inputs">

                <span class="form_input form_text autocomplete__wrapper">
                  <input type="text" name="search-display-name" id="search_by_location_field" size="30" value
                    placeholder="Area or postcode" pattern=".*" required data-store-search-text autocomplete="off">
                  <input type="hidden" id="hidden_search" name="search" value>
                </span>



                <span class="form_input ">
                  <div id="miles_from_max">
                    <label class="form_label" for="radius">Search radius</label>
                    <span class="form_select">
                      <select name="miles_from_max" id="radius">
                        <option value="0">This area only</option>
                        <option value="1">1 mile radius</option>
                        <option value="2">2 mile radius</option>
                        <option value="3">3 mile radius</option>
                        <option value="4">4 mile radius</option>
                        <option value="5">5 mile radius</option>
                        <option value="10">10 mile radius</option>
                        <option value="15">15 mile radius</option>
                        <option value="20">20 mile radius</option>
                        <option value="30">30 mile radius</option>
                        <option value="40">40 mile radius</option>
                      </select>
                    </span>
                  </div>
                </span>


                <!--/is_loggedin-->
              </div>
            </div>
            <div class="form_row form_row_zone">
              <label class="form_label" for="min-zone">Search by Nigeria travel zones</label>
              <div class="form_inputs">
                Between zone
                <span class="form_input form_select">
                  <select name="min_zone" id="min-zone">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                </span>
                <span class="form_text_separator">and</span>
                <span class="form_input form_select">
                  <select name="max_zone">
                    <option value="1">1</option>
                    <option value="2" selected>2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>

                </span>
              </div>
            </div>
            <div class="form_row form_row_tube">
              <label class="form_label" for="tube-line">Search by Nigeria tube line</label>
              <div class="form_inputs">
                <span class="form_input form_select">
                  <select name="tube_line" id="tube-line">
                    <option value SELECTED>choose tube line</option>
                    <option value="Bakerloo Line">Bakerloo Line</option>
                    <option value="Central Line">Central Line</option>
                    <option value="Circle Line">Circle Line</option>
                    <option value="District Line">District Line</option>
                    <option value="Docklands Light Railway">Docklands Light Railway</option>
                    <option value="Elizabeth Line">Elizabeth Line</option>
                    <option value="Hammersmith and City Line">Hammersmith and City Line</option>
                    <option value="Jubilee Line">Jubilee Line</option>
                    <option value="London Overground">London Overground</option>
                    <option value="Metropolitan Line">Metropolitan Line</option>
                    <option value="Northern Line">Northern Line</option>
                    <option value="Piccadilly Line">Piccadilly Line</option>
                    <option value="Victoria Line">Victoria Line</option>
                  </select>
                </span>
              </div>
            </div>
            <div class="form_row form_row_commuter">
              <label class="form_label" for="max-commute-time">Search by commute duration</label>
              <div class="form_inputs">
                within
                <span class="form_input form_select">
                  <select name="max_commute_time" id="max-commute-time">
                    <option value="10">10</option>
                    <option value="20" SELECTED>20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="60">60</option>
                  </select>
                </span>
                mins commute from
                <span class="form_input form_select">
                  <select name="station">
                    <option value SELECTED>Choose station</option>

                    <option value="ABBEYROAD">Abbey Road</option>

                    <option value="ACTONCENTRAL">Acton Central</option>

                    <option value="ACTONTOWN">Acton Town</option>

                    <option value="ALDGATE">Aldgate</option>

                    <option value="ALDGATEEAST">Aldgate East</option>

                    <option value="ALLSAINTS">All Saints</option>

                    <option value="ALPERTON">Alperton</option>

                    <option value="AMERSHAM">Amersham</option>

                    <option value="ANERLEY">Anerley</option>

                    <option value="ANGEL">Angel</option>

                    <option value="ARCHWAY">Archway</option>

                    <option value="ARNOSGROVE">Arnos Grove</option>

                    <option value="BAKERSTREET">Baker Street</option>

                    <option value="BALHAM">Balham</option>

                    <option value="BANKMONUMENT">Bank / Monument</option>

                    <option value="BARBICAN">Barbican</option>

                    <option value="BARKING">Barking</option>

                    <option value="BARKINGRIVERSIDE">Barking Riverside</option>

                    <option value="BARKINGSIDE">Barkingside</option>

                    <option value="BARONSCOURT">Barons Court</option>

                    <option value="BATTERSEAPOWERSTATION">Battersea Power Station</option>

                    <option value="BAYSWATER">Bayswater</option>

                    <option value="BECKTON">Beckton</option>

                    <option value="BECKTONPARK">Beckton Park</option>

                    <option value="BECONTREE">Becontree</option>

                    <option value="BELSIZEPARK">Belsize Park</option>

                    <option value="BERMONDSEY">Bermondsey</option>

                    <option value="BETHNALGREEN2">Bethnal Green</option>

                    <option value="BLACKFRIARS">Blackfriars</option>

                    <option value="BLACKHORSEROAD">Blackhorse Road</option>

                    <option value="BLACKWALL">Blackwall</option>

                    <option value="BONDSTREET">Bond Street</option>

                    <option value="BOROUGH">Borough</option>

                    <option value="BOSTONMANOR">Boston Manor</option>

                    <option value="BOUNDSGREEN">Bounds Green</option>

                    <option value="BOWCHURCH">Bow Church</option>

                    <option value="BOWROAD">Bow Road</option>

                    <option value="BRENTCROSS">Brent Cross</option>

                    <option value="BRIXTONSTATION">Brixton</option>

                    <option value="BROCKLEY">Brockley</option>

                    <option value="BROMLEYBYBOW">Bromley-by-Bow</option>

                    <option value="BRONDESBURY">Brondesbury</option>

                    <option value="BRONDESBURYPARK">Brondesbury Park</option>

                    <option value="BRUCEGROVE">Bruce Grove</option>

                    <option value="BUCKHURSTHILL">Buckhurst Hill</option>

                    <option value="BURNTOAK">Burnt Oak</option>

                    <option value="BUSHEY">Bushey</option>

                    <option value="CALEDONIANROAD">Caledonian Road</option>

                    <option value="CALEDONIANROADBARNSBURY">Caledonian Road & Barnsbury</option>

                    <option value="CAMDENROAD">Camden Road</option>

                    <option value="CAMDENTOWN">Camden Town</option>

                    <option value="CANADAWATER">Canada Water</option>

                    <option value="CANARYWHARF">Canary Wharf</option>

                    <option value="CANNINGTOWN">Canning Town</option>

                    <option value="CANNONSTREET">Cannon Street</option>

                    <option value="CANONBURY">Canonbury</option>

                    <option value="CANONSPARK">Canons Park</option>

                    <option value="CARPENDERSPARK">Carpenders Park</option>

                    <option value="CHALFONTLATIMER">Chalfont & Latimer</option>

                    <option value="CHALKFARM">Chalk Farm</option>

                    <option value="CHANCERYLANE">Chancery Lane</option>

                    <option value="CHARINGCROSS">Charing Cross</option>

                    <option value="CHESHAM">Chesham</option>

                    <option value="CHIGWELL">Chigwell</option>

                    <option value="CHISWICKPARK">Chiswick Park</option>

                    <option value="CHORLEYWOOD">Chorleywood</option>

                    <option value="CLAPHAMCOMMON">Clapham Common</option>

                    <option value="CLAPHAMHIGHSTREET">Clapham High Street</option>

                    <option value="CLAPHAMJUNCTION">Clapham Junction</option>

                    <option value="CLAPHAMNORTH">Clapham North</option>

                    <option value="CLAPHAMSOUTH">Clapham South</option>

                    <option value="COCKFOSTERS">Cockfosters</option>

                    <option value="COLINDALE">Colindale</option>

                    <option value="COLLIERSWOOD">Colliers Wood</option>

                    <option value="COVENTGARDEN">Covent Garden</option>

                    <option value="CROSSHARBOUR">Crossharbour</option>

                    <option value="CROUCHHILL">Crouch Hill</option>

                    <option value="CROXLEY">Croxley</option>

                    <option value="CRYSTALPALACE">Crystal Palace</option>

                    <option value="CUSTOMHOUSE">Custom House</option>

                    <option value="CUTTYSARK">Cutty Sark</option>

                    <option value="CYPRUS">Cyprus</option>

                    <option value="DAGENHAMEAST">Dagenham East</option>

                    <option value="DAGENHAMHEATHWAY">Dagenham Heathway</option>

                    <option value="DALSTONJUNCTION">Dalston Junction</option>

                    <option value="DALSTONKINGSLAND">Dalston Kingsland</option>

                    <option value="DEBDEN">Debden</option>

                    <option value="DENMARKHILL">Denmark Hill</option>

                    <option value="DEPTFORDBRIDGE">Deptford Bridge</option>

                    <option value="DEVONSROAD">Devons Road</option>

                    <option value="DOLLISHILL">Dollis Hill</option>

                    <option value="EALINGBROADWAY">Ealing Broadway</option>

                    <option value="EALINGCOMMON">Ealing Common</option>

                    <option value="EARLSCOURT">Earl's Court</option>

                    <option value="EASTACTON">East Acton</option>

                    <option value="EASTFINCHLEY">East Finchley</option>

                    <option value="EASTHAM">East Ham</option>

                    <option value="EASTINDIA">East India</option>

                    <option value="EASTPUTNEY">East Putney</option>

                    <option value="EASTCOTE">Eastcote</option>

                    <option value="EDGWARE">Edgware</option>

                    <option value="EDGWAREROAD">Edgware Road</option>

                    <option value="ELEPHANTCASTLE">Elephant & Castle</option>

                    <option value="ELMPARK">Elm Park</option>

                    <option value="ELVERSONROAD">Elverson Road</option>

                    <option value="EMBANKMENT">Embankment</option>

                    <option value="EPPING">Epping</option>

                    <option value="EUSTON">Euston</option>

                    <option value="EUSTONSQUARE">Euston Square</option>

                    <option value="FAIRLOP">Fairlop</option>

                    <option value="FARRINGDON">Farringdon</option>

                    <option value="FINCHLEYCENTRAL">Finchley Central</option>

                    <option value="FINCHLEYROAD">Finchley Road</option>

                    <option value="FINCHLEYROADFROGNAL">Finchley Road & Frognal</option>

                    <option value="FINSBURYPARK">Finsbury Park</option>

                    <option value="FORESTHILL">Forest Hill</option>

                    <option value="FULHAMBROADWAY">Fulham Broadway</option>

                    <option value="GALLIONSREACH">Gallions Reach</option>

                    <option value="GANTSHILL">Gants Hill</option>

                    <option value="GLOUCESTERROAD">Gloucester Road</option>

                    <option value="GOLDERSGREEN">Golders Green</option>

                    <option value="GOLDHAWKROAD">Goldhawk Road</option>

                    <option value="GOODGESTREET">Goodge Street</option>

                    <option value="GOSPELOAK">Gospel Oak</option>

                    <option value="GRANGEHILL">Grange Hill</option>

                    <option value="GREATPORTLANDSTREET">Great Portland Street</option>

                    <option value="GREENPARK">Green Park</option>

                    <option value="GREENFORD">Greenford</option>

                    <option value="GUNNERSBURY">Gunnersbury</option>

                    <option value="HACKNEYCENTRAL">Hackney Central</option>

                    <option value="HACKNEYWICK">Hackney Wick</option>

                    <option value="HAGGERSTON">Haggerston</option>

                    <option value="HAINAULT">Hainault</option>

                    <option value="HAMMERSMITH">Hammersmith</option>

                    <option value="HAMPSTEAD">Hampstead</option>

                    <option value="HAMPSTEADHEATH">Hampstead Heath</option>

                    <option value="HANGERLANE">Hanger Lane</option>

                    <option value="HARLESDEN">Harlesden</option>

                    <option value="HARRINGAYGREENLANES">Harringay Green Lanes</option>

                    <option value="HARROWANDWEALDSTONE">Harrow and Wealdstone</option>

                    <option value="HARROWONTHEHILL">Harrow-on-the-Hill</option>

                    <option value="HATCHEND">Hatch End</option>

                    <option value="HATTONCROSS">Hatton Cross</option>

                    <option value="HEADSTONELANE">Headstone Lane</option>

                    <option value="HEATHROW">Heathrow</option>

                    <option value="HENDONCENTRAL">Hendon Central</option>

                    <option value="HERONQUAYS">Heron Quays</option>

                    <option value="HIGHBARNET">High Barnet</option>

                    <option value="HIGHSTREETKENSINGTON">High Street Kensington</option>

                    <option value="HIGHBURYISLINGTON">Highbury & Islington</option>

                    <option value="HIGHGATE">Highgate</option>

                    <option value="HILLINGDON">Hillingdon</option>

                    <option value="HOLBORN">Holborn</option>

                    <option value="HOLLANDPARK">Holland Park</option>

                    <option value="HOLLOWAYROAD">Holloway Road</option>

                    <option value="HOMERTON">Homerton</option>

                    <option value="HONOROAKPARK">Honor Oak Park</option>

                    <option value="HORNCHURCH">Hornchurch</option>

                    <option value="HOUNSLOWCENTRAL">Hounslow Central</option>

                    <option value="HOUNSLOWEAST">Hounslow East</option>

                    <option value="HOUNSLOWWEST">Hounslow West</option>

                    <option value="HOXTON">Hoxton</option>

                    <option value="HYDEPARKCORNER">Hyde Park Corner</option>

                    <option value="ICKENHAM">Ickenham</option>

                    <option value="IMPERIALWHARF">Imperial Wharf</option>

                    <option value="ISLANDGARDENS">Island Gardens</option>

                    <option value="KENNINGTON">Kennington</option>

                    <option value="KENSALGREEN">Kensal Green</option>

                    <option value="KENSALRISE">Kensal Rise</option>

                    <option value="KENSINGTONOLYMPIA">Kensington (Olympia)</option>

                    <option value="KENTISHTOWN">Kentish Town</option>

                    <option value="KENTISHTOWNWEST">Kentish Town West</option>

                    <option value="KENTON">Kenton</option>

                    <option value="KEWGARDENS">Kew Gardens</option>

                    <option value="KILBURN">Kilburn</option>

                    <option value="KILBURNHIGHROAD">Kilburn High Road</option>

                    <option value="KILBURNPARK">Kilburn Park</option>

                    <option value="KINGGEORGEV">King George V</option>

                    <option value="KINGSCROSSSTPANCRAS">King's Cross / St. Pancras</option>

                    <option value="KINGSBURY">Kingsbury</option>

                    <option value="KNIGHTSBRIDGE">Knightsbridge</option>

                    <option value="LADBROKEGROVE">Ladbroke Grove</option>

                    <option value="LAMBETHNORTH">Lambeth North</option>

                    <option value="LANCASTERGATE">Lancaster Gate</option>

                    <option value="LANGDONPARK">Langdon Park</option>

                    <option value="LATIMERROAD">Latimer Road</option>

                    <option value="LEICESTERSQUARE">Leicester Square</option>

                    <option value="LEWISHAM">Lewisham</option>

                    <option value="LEYTON">Leyton</option>

                    <option value="LEYTONMIDLANDROAD">Leyton Midland Road</option>

                    <option value="LEYTONSTONE">Leytonstone</option>

                    <option value="LEYTONSTONEHIGHROAD">Leytonstone High Road</option>

                    <option value="LIMEHOUSE">Limehouse</option>

                    <option value="LIVERPOOLSTREET">Liverpool Street</option>

                    <option value="LONDONBRIDGE">London Bridge</option>

                    <option value="LONDONCITYAIRPORT">London City Airport</option>

                    <option value="LOUGHTON">Loughton</option>

                    <option value="MAIDAVALE">Maida Vale</option>

                    <option value="MANORHOUSE">Manor House</option>

                    <option value="MANSIONHOUSE">Mansion House</option>

                    <option value="MARBLEARCH">Marble Arch</option>

                    <option value="MARYLEBONE">Marylebone</option>

                    <option value="MILEEND">Mile End</option>

                    <option value="MILLHILLEAST">Mill Hill East</option>

                    <option value="MOORPARK">Moor Park</option>

                    <option value="MOORGATE">Moorgate</option>

                    <option value="MORDEN">Morden</option>

                    <option value="MORNINGTONCRESCENT">Mornington Crescent</option>

                    <option value="MUDCHUTE">Mudchute</option>

                    <option value="NEASDEN">Neasden</option>

                    <option value="NEWCROSS">New Cross</option>

                    <option value="NEWCROSSGATE">New Cross Gate</option>

                    <option value="NEWBURYPARK">Newbury Park</option>

                    <option value="NINEELMS">Nine Elms</option>

                    <option value="NORTHACTON">North Acton</option>

                    <option value="NORTHEALING">North Ealing</option>

                    <option value="NORTHGREENWICH">North Greenwich</option>

                    <option value="NORTHHARROW">North Harrow</option>

                    <option value="NORTHWEMBLEY">North Wembley</option>

                    <option value="NORTHFIELDS">Northfields</option>

                    <option value="NORTHOLT">Northolt</option>

                    <option value="NORTHWICKPARK">Northwick Park</option>

                    <option value="NORTHWOOD">Northwood</option>

                    <option value="NORTHWOODHILLS">Northwood Hills</option>

                    <option value="NORWOODJUNCTION">Norwood Junction</option>

                    <option value="NOTTINGHILLGATE">Notting Hill Gate</option>

                    <option value="OAKWOOD">Oakwood</option>

                    <option value="OLDSTREET">Old Street</option>

                    <option value="OSTERLEY">Osterley</option>

                    <option value="OVAL">Oval</option>

                    <option value="OXFORDCIRCUS">Oxford Circus</option>

                    <option value="PADDINGTON">Paddington</option>

                    <option value="PARKROYAL">Park Royal</option>

                    <option value="PARSONSGREEN">Parsons Green</option>

                    <option value="PECKHAMRYE">Peckham Rye</option>

                    <option value="PENGEWEST">Penge West</option>

                    <option value="PERIVALE">Perivale</option>

                    <option value="PICCADILLYCIRCUS">Piccadilly Circus</option>

                    <option value="PIMLICO">Pimlico</option>

                    <option value="PINNER">Pinner</option>

                    <option value="PLAISTOW">Plaistow</option>

                    <option value="PONTOONDOCK">Pontoon Dock</option>

                    <option value="POPLAR">Poplar</option>

                    <option value="PRESTONROAD">Preston Road</option>

                    <option value="PRINCEREGENT">Prince Regent</option>

                    <option value="PUDDINGMILLANE">Pudding Mill Lane</option>

                    <option value="PUTNEYBRIDGE">Putney Bridge</option>

                    <option value="QUEENSPARK">Queen's Park</option>

                    <option value="QUEENSROADPECKHAM">Queens Road Peckham</option>

                    <option value="QUEENSBURY">Queensbury</option>

                    <option value="QUEENSWAY">Queensway</option>

                    <option value="RAVENSCOURTPARK">Ravenscourt Park</option>

                    <option value="RAYNERSLANE">Rayners Lane</option>

                    <option value="REDBRIDGE">Redbridge</option>

                    <option value="REGENTSPARK">Regent's Park</option>

                    <option value="RICHMOND">Richmond</option>

                    <option value="RICKMANSWORTH">Rickmansworth</option>

                    <option value="RODINGVALLEY">Roding Valley</option>

                    <option value="ROTHERHITHE">Rotherhithe</option>

                    <option value="ROYALALBERT">Royal Albert</option>

                    <option value="ROYALOAK">Royal Oak</option>

                    <option value="ROYALVICTORIA">Royal Victoria</option>

                    <option value="RUISLIP">Ruislip</option>

                    <option value="RUISLIPGARDENS">Ruislip Gardens</option>

                    <option value="RUISLIPMANOR">Ruislip Manor</option>

                    <option value="RUSSELLSQUARE">Russell Square</option>

                    <option value="SEVENSISTERS">Seven Sisters</option>

                    <option value="SHADWELL">Shadwell</option>

                    <option value="SHEPHERDSBUSH">Shepherd's Bush</option>

                    <option value="SHEPHERDSBUSH2">Shepherd's Bush Market</option>

                    <option value="SHOREDITCH">Shoreditch High Street</option>

                    <option value="SLOANESQUARE">Sloane Square</option>

                    <option value="SNARESBROOK">Snaresbrook</option>

                    <option value="SOUTHACTON">South Acton</option>

                    <option value="SOUTHEALING">South Ealing</option>

                    <option value="SOUTHHAMPSTEAD">South Hampstead</option>

                    <option value="SOUTHHARROW">South Harrow</option>

                    <option value="SOUTHKENSINGTON">South Kensington</option>

                    <option value="SOUTHKENTON">South Kenton</option>

                    <option value="SOUTHQUAY">South Quay</option>

                    <option value="SOUTHRUISLIP">South Ruislip</option>

                    <option value="SOUTHTOTTENHAM">South Tottenham</option>

                    <option value="SOUTHWIMBLEDON">South Wimbledon</option>

                    <option value="SOUTHWOODFORD">South Woodford</option>

                    <option value="SOUTHFIELDS">Southfields</option>

                    <option value="SOUTHGATESTATION">Southgate</option>

                    <option value="SOUTHWARK">Southwark</option>

                    <option value="STJAMESSPARK">St. James's Park</option>

                    <option value="STJOHNSWOOD">St. John's Wood</option>

                    <option value="STPAULS">St. Paul's</option>

                    <option value="STAMFORDBROOK">Stamford Brook</option>

                    <option value="STANMORE">Stanmore</option>

                    <option value="STARLANE">Star Lane</option>

                    <option value="STEPNEYGREEN">Stepney Green</option>

                    <option value="STOCKWELL">Stockwell</option>

                    <option value="STONEBRIDGEPARK">Stonebridge Park</option>

                    <option value="STRATFORD">Stratford</option>

                    <option value="STRATFORDHIGHSTREET">Stratford High Street</option>

                    <option value="STRATFORDINTERNATIONAL">Stratford International</option>

                    <option value="SUDBURYHILL">Sudbury Hill</option>

                    <option value="SUDBURYTOWN">Sudbury Town</option>

                    <option value="SURREYQUAYS">Surrey Quays</option>

                    <option value="SWISSCOTTAGE">Swiss Cottage</option>

                    <option value="SYDENHAM">Sydenham</option>

                    <option value="TEMPLE">Temple</option>

                    <option value="THEYDONBOIS">Theydon Bois</option>

                    <option value="TOOTINGBEC">Tooting Bec</option>

                    <option value="TOOTINGBROADWAY">Tooting Broadway</option>

                    <option value="TOTTENHAMCOURTROAD">Tottenham Court Road</option>

                    <option value="TOTTENHAMHALE">Tottenham Hale</option>

                    <option value="TOTTERIDGEWHETSTONE">Totteridge & Whetstone</option>

                    <option value="TOWERGATEWAY">Tower Gateway</option>

                    <option value="TOWERHILL">Tower Hill</option>

                    <option value="TUFNELLPARK">Tufnell Park</option>

                    <option value="TURNHAMGREEN">Turnham Green</option>

                    <option value="TURNPIKELANE">Turnpike Lane</option>

                    <option value="UPMINSTER">Upminster</option>

                    <option value="UPMINSTERBRIDGE">Upminster Bridge</option>

                    <option value="UPNEY">Upney</option>

                    <option value="UPPERHOLLOWAY">Upper Holloway</option>

                    <option value="UPTONPARK">Upton Park</option>

                    <option value="UXBRIDGE">Uxbridge</option>

                    <option value="VAUXHALL">Vauxhall</option>

                    <option value="VICTORIA">Victoria</option>

                    <option value="WALTHAMSTOWCENTRAL">Walthamstow Central</option>

                    <option value="WALTHAMSTOWQUEENSROAD">Walthamstow Queen's Road</option>

                    <option value="WANDSWORTHROAD">Wandsworth Road</option>

                    <option value="WANSTEAD">Wanstead</option>

                    <option value="WANSTEADPARK">Wanstead Park</option>

                    <option value="WAPPING">Wapping</option>

                    <option value="WARRENSTREET">Warren Street</option>

                    <option value="WARWICKAVENUE">Warwick Avenue</option>

                    <option value="WATERLOO">Waterloo</option>

                    <option value="WATFORD">Watford</option>

                    <option value="WATFORDHIGHSTREET">Watford High Street</option>

                    <option value="WATFORDJUNCTION">Watford Junction</option>

                    <option value="WEMBLEYCENTRAL">Wembley Central</option>

                    <option value="WEMBLEYPARK">Wembley Park</option>

                    <option value="WESTACTON">West Acton</option>

                    <option value="WESTBROMPTON">West Brompton</option>

                    <option value="WESTCROYDON">West Croydon</option>

                    <option value="WESTFINCHLEY">West Finchley</option>

                    <option value="WESTHAM">West Ham</option>

                    <option value="WESTHAMPSTEAD">West Hampstead</option>

                    <option value="WESTHARROW">West Harrow</option>

                    <option value="WESTINDIAQUAY">West India Quay</option>

                    <option value="WESTKENSINGTON">West Kensington</option>

                    <option value="WESTRUISLIP">West Ruislip</option>

                    <option value="WESTSILVERTOWN">West Silvertown</option>

                    <option value="WESTBOURNEPARK">Westbourne Park</option>

                    <option value="WESTFERRY">Westferry</option>

                    <option value="WESTMINSTER">Westminster</option>

                    <option value="WHITECITY">White City</option>

                    <option value="WHITECHAPEL">Whitechapel</option>

                    <option value="WILLESDENGREEN">Willesden Green</option>

                    <option value="WILLESDENJUNCTION">Willesden Junction</option>

                    <option value="WIMBLEDONMAIN">Wimbledon</option>

                    <option value="WIMBLEDONPARK">Wimbledon Park</option>

                    <option value="WOODGREEN">Wood Green</option>

                    <option value="WOODLANE">Wood Lane</option>

                    <option value="WOODFORD">Woodford</option>

                    <option value="WOODGRANGEPARK">Woodgrange Park</option>

                    <option value="WOODSIDEPARK">Woodside Park</option>

                    <option value="WOOLWICHARSENAL">Woolwich Arsenal</option>

                  </select>
                </span>
                station
              </div>
            </div>
            <div class="form_row form_row_include ">
              <div class="form_label">Include</div>
              <div class="form_inputs">

                <label class="form_input form_checkbox"
                  title="Select this option to include properties with current occupants in the results"
                  for="roomsInShares">
                  <input type="checkbox" name="showme_rooms" CHECKED id="roomsInShares" value="Y">
                  Rooms in existing shares

                </label>
                <label class="form_input form_checkbox" for="oneBedOrStudio"
                  title="Select this option to include 1 bed flats in the results">
                  <input type="checkbox" name="showme_1beds" CHECKED value="Y" id="oneBedOrStudio">
                  Studios & 1 bed flats

                </label>

                <label class="form_input form_checkbox"
                  title="Select this option to include whole properties in the results, so you can buddy up with other room seekers"
                  for="wholeProperty">
                  <input type="checkbox" name="showme_buddyup_properties" CHECKED id="wholeProperty" value="Y"><span
                    class="aside-form_align-text">
                    Whole flats / houses (suitable for buddying up)</span>

                </label>

              </div>
            </div>
          </fieldset>

          <fieldset class="fieldset ">
            <legend class="form_legend">Property preferences</legend>
            <p class="msg notice search_form_fields_optional">
              All fields are optional
            </p>

            <div class="form_row form_row_rent">
              <label class="form_label" for="min-rent">Rent £</label>
              <div class="form_inputs">

                <span class="form_input form_text">
                  <input class="rent-input" type="number" min="1" max="99999" step="1" name="min_rent" id="min-rent"
                    value size="5" placeholder="min" onkeypress="return event.key != 'Decimal'"
                    aria-label="Minimum rent">
                </span>
                <span class="form_text_separator">to</span>
                <span class="form_input form_text">
                  <input class="rent-input" type="number" min="1" max="99999" step="1" name="max_rent" id="max-rent"
                    value size="5" placeholder="max" onkeypress="return event.key != 'Decimal'"
                    aria-label="Maximum rent">
                </span>

                <label class="form_input form_radio">
                  <input type="radio" name="per" value="pw">
                  pw
                </label>
                <label class="form_input form_radio">
                  <input type="radio" name="per" value="pcm" checked>
                  pcm
                </label>
              </div>
            </div>
            <div class="form_row form_row_bills_inc">
              <div class="form_label">Bills included</div>
              <div class="form_inputs">

                <label class="form_input form_checkbox" for="billsIncluded">
                  <input type="checkbox" name="bills_inc" id="billsIncluded" value="Yes">
                  Only show rooms with all bills included in the rent

                </label>
              </div>
            </div>
            <div class="form_row form_row_rooms_for">
              <div class="form_label">Rooms for</div>
              <div class="form_inputs">

                <label class="form_input form_radio" for="femalesShare" title="Show rooms for females">
                  <input type="radio" id="femalesShare" name="rooms_for" value="females">
                  Females

                </label>
                <label class="form_input form_radio" title="Show rooms for males" for="malesShare">
                  <input type="radio" name="rooms_for" id="malesShare" value="males">
                  Males

                </label>
                <label class="form_input form_radio" for="couplesShare" title="Show rooms for couples">
                  <input type="radio" name="rooms_for" id="couplesShare" value="couples">
                  Couples

                </label>
              </div>
            </div>
            <div class="form_row form_row_rooms_suitable_age_range ">
              <label class="form_label" for="min-age">Rooms suitable for ages</label>
              <div class="form_inputs">
                <span class="form_input form_text">
                  <input type="number" style="min-width: 35px;" name="min_suitable_age" value size="3" min="18" max="99"
                    step="1" placeholder="min"
                    onkeypress="return event.key >= 0 && event.key <= 9 || event.which >= 48 && event.which <= 57">
                </span>
                <span class="form_text_separator">to</span>
                <span class="form_input form_text">
                  <input type="number" style="min-width: 35px;" name="max_suitable_age" value size="3" min="18" max="99"
                    step="1" placeholder="max"
                    onkeypress="return event.key >= 0 && event.key <= 9 || event.which >= 48 && event.which <= 57">
                </span>
              </div>
            </div>
            <div class="form_row form_row_room_sizes">
              <div class="form_label">Room sizes</div>
              <div class="form_inputs">

                <label class="form_input form_radio" for="anyRoomSize" title="Show all room sizes">
                  <input type="radio" name="room_types" id="anyRoomSize" value>
                  Don't mind

                </label>
                <label class="form_input form_radio" for="doubleRoom" title="Show double rooms">
                  <input type="radio" name="room_types" id="doubleRoom" value="double">
                  Double

                </label>
                <label class="form_input form_radio" for="singleRoom" title="Show single rooms">
                  <input type="radio" name="room_types" id="singleRoom" value="single">
                  Single

                </label>

              </div>
            </div>
            <div class="form_row form_row_en_suite">
              <div class="form_label">En suite</div>
              <div class="form_inputs">

                <label class="form_input form_radio" for="en-suite" title="Only show rooms with an en-suite bathroom">
                  <input type="radio" id="en-suite" name="ensuite" value="Y">
                  Yes

                </label>

                <label class="form_input form_radio" title="Show all rooms, including rooms with no ensuite bathroom">
                  <input type="radio" name="ensuite" value="dont_mind">
                  Don't mind
                </label>
              </div>
            </div>
            <div class="form_row form_row_en_suite">
              <div class="form_label">Room amenities</div>
              <div class="form_inputs">

                <label class="form_input form_radio" for="furnishedUnfurnished"
                  title="Show all rooms furnished or unfurnished">
                  <input type="radio" name="furnished" id="furnishedUnfurnished" value>
                  Either

                </label>
                <label class="form_input form_radio" for="furnished" title="Show only furnished rooms">
                  <input type="radio" name="furnished" id="furnished" value="Y">
                  Furnished

                </label>
                <label class="form_input form_radio" for="unfurnished" title="Show only unfurnished rooms">
                  <input type="radio" name="furnished" id="unfurnished" value="N">
                  Unfurnished

                </label>

              </div>
            </div>
            <div class="form_row form_row_num_of_rooms">
              <div class="form_label">Number of rooms</div>
              <div class="form_inputs">
                <span class="form_hint">i.e. More than one of you need a room?</span>
                <label class="form_input form_select" title="How many rooms are you searching for?">
                  <span class="sr-only">How many rooms are you searching for?</span>
                  <select name="no_of_rooms">
                    <option value SELECTED>1 room for rent</option>
                    <option value="2">2+ Rooms for rent</option>
                    <option value="3">3+ Rooms for rent</option>
                  </select>
                </label>
              </div>
            </div>

            <div class="form_row form_row_living_room">
              <div class="form_label">Shared living room</div>
              <div class="form_inputs">
                <span class="form_hint">i.e. Communal living space (rather than converted to another bedroom for
                  instance)</span>

                <label class="form_input form_checkbox">
                  <input type="checkbox" name="living_room" value="shared">
                  Shared living room required
                </label>

              </div>
            </div>


            <div class="form_row form_row_num_of_beds">
              <div class="form_label">Number of Beds</div>
              <div class="form_inputs">
                <span class="form_input form_select">
                  <select name="min_beds">
                    <option value SELECTED>1 bed</option>
                    <option value="2">2 bed</option>
                    <option value="3">3 bed</option>
                    <option value="4">4 bed</option>
                    <option value="5">5 bed</option>
                  </select>
                </span>
                <span class="form_text_separator">to</span>
                <span class="form_input form_select">
                  <select name="max_beds">
                    <option value="1">1 bed</option>
                    <option value="2">2 bed</option>
                    <option value="3">3 bed</option>
                    <option value="4">4 bed</option>
                    <option value="5">5 bed</option>
                    <option value SELECTED>6 bed+</option>
                  </select>
                </span>
              </div>
            </div>

            <div class="form_row form_row_smoking">
              <div class="form_label">Smoking allowed</div>
              <div class="form_inputs">

                <label class="form_input form_radio" for="smokingAcceptable"
                  title="Show rooms where smoking is allowed">
                  <input type="radio" name="smoking" id="smokingAcceptable" value="Y">
                  Yes

                </label>
                <label class="form_input form_radio" for="nonSmokingShare" title="Show non smoking rooms">
                  <input type="radio" name="smoking" id="nonSmokingShare" value="N">
                  No

                </label>
              </div>
            </div>

            <div class="form_row form_row_terms">
              <div class="form_label">Length of stay</div>
              <div class="form_inputs">
                Minimum:
                <span class="form_input form_select">
                  <select name="min_term">
                    <option value="0">No minimum</option>
                    <option value="1">1 month</option>
                    <option value="2">2 months</option>
                    <option value="3">3 months</option>
                    <option value="4">4 months</option>
                    <option value="5">5 months</option>
                    <option value="6">6 months</option>
                    <option value="7">7 months</option>
                    <option value="8">8 months</option>
                    <option value="9">9 months</option>
                    <option value="10">10 months</option>
                    <option value="11">11 months</option>
                    <option value="12">1 year</option>
                    <option value="15">1 year 3 months</option>
                    <option value="18">1 year 6 months</option>
                    <option value="21">1 year 9 months</option>
                    <option value="24">2 years</option>
                    <option value="36">3 years</option>
                  </select>
                </span>
                <br>
                Maximum:
                <span class="form_input form_select">
                  <select name="max_term">
                    <option value="0">No maximum</option>
                    <option value="1">1 month</option>
                    <option value="2">2 months</option>
                    <option value="3">3 months</option>
                    <option value="4">4 months</option>
                    <option value="5">5 months</option>
                    <option value="6">6 months</option>
                    <option value="7">7 months</option>
                    <option value="8">8 months</option>
                    <option value="9">9 months</option>
                    <option value="10">10 months</option>
                    <option value="11">11 months</option>
                    <option value="12">1 year</option>
                    <option value="15">1 year 3 months</option>
                    <option value="18">1 year 6 months</option>
                    <option value="21">1 year 9 months</option>
                    <option value="24">2 years</option>
                    <option value="36">3 years</option>
                  </select>
                </span>
              </div>
            </div>

            <div class="form_row form_row_move_in">
              <div class="form_label">To move in</div>
              <div class="form_inputs">

                <label class="form_input form_radio">
                  <input type="radio" name="available_search" CHECKED value="N">
                  Anytime
                </label>
                <br>
                <span class="form_input form_radio">
                  <input type="radio" name="available_search" value="Y">
                  <span class="form_select">
                    <select name="day_avail" id="day_avail">\n<option value="01">01
                      </option>
                      <option value="02">02
                      </option>
                      <option value="03">03
                      </option>
                      <option value="04">04
                      </option>
                      <option value="05">05
                      </option>
                      <option value="06">06
                      </option>
                      <option value="07">07
                      </option>
                      <option value="08">08
                      </option>
                      <option value="09">09
                      </option>
                      <option value="10">10
                      </option>
                      <option value="11">11
                      </option>
                      <option value="12">12
                      </option>
                      <option value="13">13
                      </option>
                      <option value="14">14
                      </option>
                      <option value="15">15
                      </option>
                      <option value="16">16
                      </option>
                      <option value="17">17
                      </option>
                      <option value="18">18
                      </option>
                      <option value="19">19
                      </option>
                      <option value="20">20
                      </option>
                      <option value="21">21
                      </option>
                      <option value="22">22
                      </option>
                      <option value="23">23
                      </option>
                      <option value="24">24
                      </option>
                      <option value="25">25
                      </option>
                      <option value="26" SELECTED>26
                      </option>
                      <option value="27">27
                      </option>
                      <option value="28">28
                      </option>
                      <option value="29">29
                      </option>
                      <option value="30">30
                      </option>
                      <option value="31">31
                      </option>
                    </select>

                  </span>
                  <span class="form_select">
                    <select name="month_avail" id="month_avail">\n<option value="01" SELECTED>01
                      </option>
                      <option value="02">02
                      </option>
                      <option value="03">03
                      </option>
                      <option value="04">04
                      </option>
                      <option value="05">05
                      </option>
                      <option value="06">06
                      </option>
                      <option value="07">07
                      </option>
                      <option value="08">08
                      </option>
                      <option value="09">09
                      </option>
                      <option value="10">10
                      </option>
                      <option value="11">11
                      </option>
                      <option value="12">12
                      </option>
                    </select>

                  </span>
                  <span class="form_select">
                    <select name="year_avail" id="year_avail">\n<option value="2024" SELECTED>2024
                      </option>
                      <option value="2025">2025
                      </option>
                      <option value="2026">2026
                      </option>
                    </select>

                  </span>
                </span>
                <div class="form_hint">
                  (We will search 21 days either side of this date)
                </div>

              </div>
            </div>
          </fieldset>
          <fieldset class="fieldset ">
            <legend class="form_legend">Sharing preferences</legend>
            <p class="msg notice search_form_fields_optional">
              All fields are optional
            </p>
            <div class="form_row form_row_couples">
              <div class="form_label">Couples?</div>
              <div class="form_inputs">
                <label class="form_input form_radio">
                  <input type="radio" name="couples" value="N">
                  No couples
                </label>
                <label class="form_input form_radio">
                  <input type="radio" name="couples" value="dont_mind">
                  Don't mind
                </label>
              </div>
            </div>

            <div class="form_row form_row_occupation">
              <div class="form_label">Occupation</div>
              <div class="form_inputs">

                <label class="form_input form_radio" for="studentsOrProfessionals" title="Show all results">
                  <input type="radio" id="studentsOrProfessionals" name="share_type" value="dont_mind">
                  Don't mind

                </label>
                <label class="form_input form_radio" for="professionalShare"
                  title="Show results for sharing with professionals">
                  <input type="radio" name="share_type" id="professionalShare" value="P">
                  Professional

                </label>
                <label class="form_input form_radio" for="studentShare" title="Show results for sharing with students">
                  <input type="radio" name="share_type" id="studentShare" value="S">
                  Student

                </label>
              </div>
            </div>
            <div class="form_row form_row_gender">
              <div class="form_label">Gender</div>
              <div class="form_inputs">

                <label class="form_input form_radio" for="sharingWithAnyGender"
                  title="Show all results regardless of gender">
                  <input type="radio" name="genderfilter" id="sharingWithAnyGender" value="none">
                  Don't mind

                </label>
                <label class="form_input form_radio" for="sharingWithfemales"
                  title="Show results for sharing with females">
                  <input type="radio" id="sharingWithfemales" name="genderfilter" value="females">
                  Females

                </label>
                <br>
                <label class="form_input form_radio" for="sharingWithMales" title="Show results for sharing with males">
                  <input type="radio" name="genderfilter" id="sharingWithMales" value="males">
                  Males

                </label>
                <label class="form_input form_radio" for="sharingWithMixedGender"
                  title="Show results for sharing with mixed households">
                  <input type="radio" name="genderfilter" id="sharingWithMixedGender" value="mixed">
                  Mixed

                </label>
              </div>
            </div>
            <div class="form_row form_row_age_range">
              <label class="form_label" for="min-age"><span id="ageRangeLabelWanted">Age range</span><span
                  id="ageRangeLabelOffered">Age range of current occupants</span></label>
              <div class="form_inputs">
                <span class="form_input form_text">
                  <input type="number" style="min-width: 35px;" name="min_age_req" value size="3" min="18" max="99"
                    step="1" placeholder="min"
                    onkeypress="return event.key >= 0 && event.key <= 9 || event.which >= 48 && event.which <= 57">
                </span>
                <span class="form_text_separator">to</span>
                <span class="form_input form_text">
                  <input type="number" style="min-width: 35px;" name="max_age_req" value size="3" min="18" max="99"
                    step="1" placeholder="max"
                    onkeypress="return event.key >= 0 && event.key <= 9 || event.which >= 48 && event.which <= 57">
                </span>
              </div>
            </div>
            <div class="form_row form_row_household_size">
              <div class="form_label">Size of household</div>
              <div class="form_inputs">
                <span class="form_hint">i.e. Total number of bedrooms in the property</span>
                <span class="form_text_between">Between</span>
                <span class="form_input form_select">
                  <select name="min_beds">
                    <option value SELECTED>-</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                </span>
                <span class="form_text_separator">and</span>
                <span class="form_input form_select">
                  <select name="max_beds">
                    <option value SELECTED>-</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6+">6+</option>
                  </select>
                </span>
              </div>
            </div>

            <div class="form_row form_row_landlord">
              <div class="form_label">Live with landlord?</div>
              <div class="form_inputs">

                <label class="form_input form_radio" title="Show results where landlords live at the property">
                  <input type="radio" name="landlord" value="live_in">
                  Yes
                </label>
                <label class="form_input form_radio" title="Show results with landlords do not live at the property">
                  <input type="radio" name="landlord" value="live_out">
                  No
                </label>
                <label class="form_input form_radio" title="Show all results">
                  <input type="radio" name="landlord" value="dont_mind">
                  Don't mind
                </label>
              </div>
            </div>

            <div class="form_row form_row_your_prefs">
              <div class="form_label">Your preferences</div>
              <div class="form_inputs">

                <label class="form_input form_checkbox" for="lgbtShare">
                  <input type="checkbox" name="gayshare" id="lgbtShare" value="Y">
                  LGBT household

                </label>
              </div>
            </div>

          </fieldset>
          <fieldset class="fieldset ">
            <legend class="form_legend">Other search options</legend>
            <p class="msg notice search_form_fields_optional">
              All fields are optional
            </p>
            <div class="form_row form_row_keywords">
              <label class="form_label" for="keywords">Keywords</label>
              <div class="form_inputs">
                <span class="form_input form_text">
                  <input type="text" name="keyword" value id="keywords">
                </span>
              </div>
            </div>

            <div class="form_row form_row_misc">
              <div class="form_label">Miscellaneous</div>
              <div class="form_inputs">

                <label class="form_input form_checkbox" for="petsAllowed">
                  <input type="checkbox" name="pets_req" id="petsAllowed" value="Y">
                  Pets considered

                </label>
                <label class="form_input form_checkbox" for="parkingPreferred">
                  <input type="checkbox" name="parking" id="parkingPreferred" value="Y">
                  Parking available

                </label>


                <label class="form_input form_checkbox form_checkbox_photos" for="adsWithPhoto">
                  <input type="checkbox" name="photoadsonly" id="adsWithPhoto" value="Y">
                  Photo ads only

                </label>


                <label class="form_input form_checkbox">
                  <input type="checkbox" name="vegetarians" id="vegetarians" value="Y">
                  Vegetarians/vegans preferred
                </label>


                <label class="form_input form_checkbox" for="shortLets">
                  <input type="checkbox" name="short_lets_considered" id="shortLets" value="Y">
                  Short term lets

                </label>



                <label class="form_input form_checkbox" for="disabledAccess">
                  <input type="checkbox" name="disabled_access" id="disabledAccess" value="Y">
                  Disabled access

                </label>


              </div>
            </div>

            <div class="form_row form_row_days_avail">
              <div class="form_label">Days available</div>
              <div class="form_inputs">
                <label class="form_input form_radio" for="allPeriods"
                  title="Show results for all types of availability">
                  <input type="radio" name="days_of_wk_available" id="allPeriods" value>
                  Don't mind

                </label>
                <br>
                <label class="form_input form_radio" for="wholeWeek"
                  title="Show results for full time lets, 7 days per week">
                  <input type="radio" name="days_of_wk_available" id="wholeWeek" value="7 days a week">
                  7 days per week
                  <span class="form_hint">(i.e. regular full time lets)</span>

                </label>
                <br>
                <label class="form_input form_radio" for="monToFri" title="Show results for Monday to Friday lets only">
                  <input type="radio" name="days_of_wk_available" id="monToFri" value="Mon to Fri only">
                  Monday to Friday lets only

                </label>
                <br>
                <label class="form_input form_radio" for="weekendsOnly" title="Show results for weekend lets only">
                  <input type="radio" name="days_of_wk_available" id="weekendsOnly" value="Weekends only">
                  Weekends only

                </label>
              </div>
            </div>

            <div class="form_row form_row_posted_by">
              <div class="form_label">Ads posted by</div>
              <div class="form_inputs">

                <label class="form_input form_radio" for="allAds" title="Show ads from agents and private landlords">
                  <input type="radio" name="posted_by" id="allAds" value="dont_mind">
                  Everyone

                </label>
                <br>
                <label class="form_input form_radio" for="adsFromAgents" title="Show ads from agents only">
                  <input type="radio" name="posted_by" id="adsFromAgents" value="agents">
                  Agents only

                </label>
                <br>
                <label class="form_input form_radio" for="privateAds" title="Show ads from private landlords only">
                  <input type="radio" name="posted_by" id="privateAds" value="private_landlords">
                  Private ads only(i.e. no agents)

                </label>
              </div>
            </div>
          </fieldset>

          <div class="form_row form_row_buttons">
            <div class="form_label"></div>
            <div class="form_inputs">

              <input type="hidden" name="searchtype" value="advanced">
              <input type="hidden" name="editing" value>
              <input type="hidden" name="mode" value>
              <input type="hidden" name="nmsq_mode" value>
              <input type="hidden" name="action" value="search">
              <input type="hidden" name="templateoveride" value>
              <input type="hidden" name="show_results" value>
              <input type="hidden" name="max_per_page" value>
              <div class="form_input form_button">
                <button class="button" id="search-button" type="submit" name="submit">Search</button>
              </div>
            </div>
          </div>
        </form>
        <script>
          (function ($) {
            localStorage.removeItem('availableSearch');
            $('[type="submit"]').on('click', function () {
              localStorage.setItem('availableSearch', $('[name="year_avail"] option:selected').val() + '-' + $('[name="month_avail"] option:selected').val() + '-' + $('[name="day_avail"] option:selected').val());
            });
          })(jQuery);
        </script>
      </div>
      <aside>
        <section>
          <section>
            <h3>Help topics</h3>
            <ul>
              <li><a href="buddyups.html">What's a buddy up?</a></li>
              <li><a href="whole-properties_1.html">How do I find whole properties to let, suitable for sharing?</a>
              </li>
              <li><a href="whole-properties_1.html#find-one-bed-properties">How do I find 1 bed properties?</a></li>
            </ul>
          </section>
        </section>


        <section class="panel panel-header-closed need-help">
          <header>
            <h3>Need any help?</h3>
          </header>
          <div>


            <ul class="need_help_contact">
              <li><a href="faq.html">View our FAQs</a></li>
              <li><a href="contact.pl" rel="nofollow">Contact us by email or phone</a></li>
            </ul>



            <!-- Start of spareroom Zendesk Widget script -->
            <script id="ze-snippet" defer src="/js/snippet.js"> </script>
            <!-- End of spareroom Zendesk Widget script -->
          </div>
        </section>
      </aside>
    </div>
  </main>
@endsection

@section('js')
<script src="/js/88d64c1655cb46d980b427cc48316e58.js"></script>
<script>
    SR.search.form.init();
</script>
@endsection