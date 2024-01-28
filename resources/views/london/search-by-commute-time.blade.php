@extends('layouts.app')

@section('title', 'Search by commute time')

@section('body-id', 'uk_london_home')
@section('body-class', 'PAGEhome')

@section('css')
<link rel="stylesheet" href="/css/77350867d40e0deebcb2156b43e65c1e.css">
<link rel="stylesheet" href="/css/72df2dd991fc3c2dc303eba7fb4d14a7.css">
<link rel="stylesheet" href="/css/search_desktop.4038c6d710642fce0f21.css">
@endsection

@section('content')
<main id="spareroom" class="wrap wrap--main">
    <section id="london-search" class="commute-time">
        <h1>Search Nigeria by... </h1>
        <nav>
            <a href="{{ route('searchByLocation') }}" id="location" data-title="Search by location">Location</a>
            <a href="{{ route('searchByCommuteTime') }}" id="commute-time" data-title="Search by commute time">Commute time</a>
            <a href="{{ route('searchByTravelZone') }}" id="travel-zone" data-title="Search by travel zone">Travel zone</a>
            <a href="{{ route('searchByTubeLine') }}" id="tube-line" data-title="Search by tube line">Tube line</a>
        </nav>
        <div class="searching-form">
            <form action="{{ route('search') }}" method="POST" class="form-content" id="tube-line-form">
                <fieldset>


                    <label>
                        I am looking along the<select name="tube_line" id="tube_line" required>
                            <option value SELECTED>Choose tube line</option>
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
                        <a href="underground-tube-map.html" title="Tube Map">(see tube map)</a>
                    </label>

                    <br>
                    <label>
                        I can afford...
                        &pound;<input type="text" name="max_rent" value size="5">per month
                    </label>
                    <input type="hidden" name="per" value="pcm">
                    <input type="hidden" name="location_type" value="tube">
                    <input type="hidden" name="action" value="search">
                </fieldset>
                <button class="button button--large submit-form" data-submit="tube-line" type="submit" name="submit">Find
                    flatshares</button>
            </form>
            <form action="{{ route('search') }}" method="POST" class="form-content" id="commute-time-form">
                <fieldset>

                    <label>
                        My ideal commute time is<select name="max_commute_time">
                            <option value="10">10</option>
                            <option value="20" SELECTED>20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="60">60</option>
                        </select>minutes,
                    </label>
                    <label>
                        from station<select name="station_id" required>
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
                    </label>
                    <br>
                    <label>
                        I can afford...
                        &pound;<input type="text" name="max_rent" value size="5">per month
                    </label>
                    <input type="hidden" name="per" value="pcm">
                    <input type="hidden" name="location_type" value="commuter">
                    <input type="hidden" name="action" value="search">
                </fieldset><button class="button button--large submit-form" data-submit="commute-time" type="submit" name="submit">Find flatshares</button>
            </form>
            <form action="{{ route('search') }}" method="POST" class="form-content" id="travel-zone-form">
                <fieldset>


                    <label>
                        I'm looking between zones<select name="min_zone">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </label><label>
                        and<select name="max_zone">
                            <option value="1">1</option>
                            <option value="2" selected>2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                        <a href="underground-tube-map.html" title="Tube Zone Map">(see zone map)</a>
                    </label>

                    <br>
                    <label>
                        I can afford...
                        &pound;<input type="text" name="max_rent" value size="5">per month
                    </label>
                    <input type="hidden" name="per" value="pcm">
                    <input type="hidden" name="location_type" value="zone">
                    <input type="hidden" name="action" value="search">
                </fieldset>
                <button class="button button--large submit-form" data-submit="travel-zone" type="submit" name="submit">Find
                    flatshares</button>
            </form>
            <form action="{{ route('search') }}" method="POST" class="form-content" id="location-form">
                <fieldset>

                    <label for="search_by_location_field">
                        <input type="text" name="search" value placeholder="Area or postcode" id="search_by_location_field" pattern=".*" required data-store-search-text autocomplete="off">
                    </label>

                    <label for="rooms_offered"><input type="radio" name="flatshare_type" CHECKED id="rooms_offered" value="offered">Rooms for rent</label><label for="rooms_wanted"><input type="radio" name="flatshare_type" id="rooms_wanted" value="wanted">Rooms wanted</label>
                    <label for="buddyup"><input type="radio" name="flatshare_type" id="buddyup" value="buddyup">Buddy
                        ups</label>
                    <span class="tooltip buddyUp" tabindex="-1">&nbsp;<i class="fas fa-info-circle"></i><span class="tooltip_box"><span class="tooltip_text">Find other people seeking accommodation to form a new
                                house / flatshare with</span><span class="tooltip_arrow">&nbsp;</span></span><span class="tooltip_background" tabindex="-1"></span></span>
                    <input type="hidden" name="action" value="search">
                </fieldset>
                <button class="button button--large submit-form" data-submit="location" type="submit" name="submit">Search</button>
            </form>
            <a class="complementary-link" href="{{ route('search') }}">Advanced search</a>
            <p class="complementary-link"><strong>Or try our: </strong><a href="{{ route('whereToLiveWizard') }}">Where to Live
                    Wizard</a></p>
        </div>
    </section>


    <section class="place-ad">
        <div class="place-ad__options">
            <div class="place-ad__option">
                <h2 class="heading place-ad__heading">Need a room?</h2>
                <p class="place-ad__text">Post a free Room Wanted ad and make sure people with rooms can find you.</p>
                <div>
                    <a class="button button--large" id="wantedButton" href="wanted_listing_step1.pl">Advertise for free</a>
                </div>
            </div>
            <div class="place-ad__option">
                <h2 class="heading place-ad__heading">Got a room to let?</h2>
                <p class="place-ad__text">Post a free ad and rent your room in days.
                    <br>
                    <a id="findOutMore" href="listing-options.html">Find out more</a>
                </p>
                <div>
                    <a class="button button--large" id="offeredButton" href="find-postcode3.pl">Post a free ad</a>
                </div>
            </div>
        </div>
    </section>



    <div class="cols_12">
        <blockquote class="cols_4_first">
            <p class="quote">Thank you very much, I was over-run with over 20 applicants within the first 2 days, so much
                better than other sites.</p>
            <p class="author">&#126; Gary B</p>
        </blockquote>
        <blockquote class="cols_4">
            <p class="quote">Just found my fourth room in 6 years through spareroom - and I've met some great people in the
                process. Big thanks to everyone who runs it.</p>
            <p class="author">&#126; Ruth C</p>
        </blockquote>
        <blockquote class="cols_4">
            <p class="quote">Arranging my housemate through SPAREROOM has worked out so well he's still here and set to
                remain for the foreseeable</p>
            <p class="author">&#126; Peter M</p>
        </blockquote>
    </div>
</main>
@endsection

@section('js')
<script>
    (function($) {

        var londonSearch = $('#london-search')
            , pageView = function($form, $title) {
                // updates searching form
                londonSearch.attr('class', $form);
                // updates page title
                $("title").html($title);
            },

            pushState = function($form, $href) {
                history.pushState({
                    form: $form
                }, null, $href);
            };

        londonSearch.find('nav a').on('click', function(e) {

            var $this = $(this);

            // updates searching form
            pageView($this.attr('id'), $this.data('title'));

            // changes browser URL
            pushState($this.attr('id'), $this.attr('href'));

            e.preventDefault();

        });

        // back button
        window.onpopstate = function(event) {
            if (event.state) {
                pageView(event.state.form, $('a#' + event.state.form).data('title'));
            }
        };

        // Update this history event so that the state object contains the data
        // for the landing page.
        pushState('commute-time', '');

    }(jQuery));

</script>
<script src="/js/6b8f54cc9ef99b72a8fd01c1754922a7.js"></script>
<script>
    SR.spareroom.london.init();
</script>
@endsection
