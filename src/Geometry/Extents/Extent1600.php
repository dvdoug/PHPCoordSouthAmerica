<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * South America/Colombia - 72°35'W to 69°35'W.
 * @internal
 */
class Extent1600
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-72.026803588867, 7.1097446441652], [-72.092362976074, 7.116248703003], [-72.153802490234, 7.1621509552003], [-72.166101074219, 7.1624179840087], [-72.192514038086, 7.2036128997803], [-72.213342285156, 7.238334274292], [-72.232926940918, 7.2733341217042], [-72.245278930664, 7.2986103057861], [-72.264596557617, 7.3625026702881], [-72.264039611816, 7.3894458770752], [-72.254724121094, 7.4252773284913], [-72.362504577637, 7.4894443511963], [-72.42389831543, 7.4930568695068], [-72.497766113281, 7.5064273834229], [-72.501672363281, 7.5072246551514], [-72.519311523437, 7.5205570220948], [-72.572442626953, 7.5979877471924], [-72.573480224609, 7.7562519073486], [-72.566606140137, 7.8884044647218], [-72.560193018, 8.0118145280001], [-72.564425524, 8.0173349310001], [-72.573234377, 8.0276954450001], [-72.584533825, 8.0360057020002], [-72.586201797, 8.0444378840001], [-72.576778477, 8.0552990390002], [-72.572303527846, 8.0600009918214], [-72.566306133, 8.062575467], [-72.551522579, 8.0667182870002], [-72.546368497, 8.0693787360001], [-72.545689815, 8.0725354700002], [-72.541048833, 8.0747692750002], [-72.540287274, 8.0791208730002], [-72.489381408691, 8.1475673675538], [-72.445840454102, 8.1477085113527], [-72.428620910644, 8.161803817749], [-72.425004577637, 8.1890254974366], [-72.436669921875, 8.2519451141359], [-72.476113891601, 8.4369426727295], [-72.488198852539, 8.4694438934326], [-72.501741027832, 8.4841686248779], [-72.505334472656, 8.4859233856202], [-72.523065185547, 8.4897228240967], [-72.683000183105, 8.6562801361085], [-72.683000183105, 8.4099422454834], [-72.683000183105, 8.1636081695557], [-72.683000183105, 7.9172702789307], [-72.683000183105, 7.670936203003], [-72.683000183105, 7.4245983123779], [-72.683000183105, 7.1782642364501], [-72.683000183105, 6.9319263458253], [-72.683000183105, 6.6855922698975], [-72.683000183105, 6.4392581939698], [-72.683000183105, 6.1929203033447], [-72.683000183105, 5.9465862274169], [-72.683000183105, 5.700248336792], [-72.683000183105, 5.4539142608643], [-72.683000183105, 5.2075763702392], [-72.683000183105, 4.9612422943115], [-72.683000183105, 4.7149082183837], [-72.683000183105, 4.4685703277588], [-72.683000183105, 4.2222362518311], [-72.683000183105, 3.9758983612062], [-72.683000183105, 3.7295642852784], [-72.683000183105, 3.5040279388427], [-72.683000183105, 3.2784954071045], [-72.683000183105, 3.052959060669], [-72.683000183105, 2.8274227142335], [-72.683000183105, 2.6018901824951], [-72.683000183105, 2.3763538360596], [-72.683000183105, 1.9508213043214], [-72.683000183105, 1.7252849578859], [-72.683000183105, 1.4762119293213], [-72.683000183105, 1.2271389007568], [-72.683000183105, 0.97806205749512], [-72.683000183105, 0.72898902893078], [-72.683000183105, 0.47991600036627], [-72.683000183105, 0.23083915710455], [-72.683000183105, -0.018233871459961], [-72.683000183105, -0.26730880737305], [-72.683000183105, -0.5163818359375], [-72.683000183105, -0.76545677185059], [-72.683000183105, -1.014529800415], [-72.683000183105, -1.2636047363281], [-72.683000183105, -1.5126777648926], [-72.683000183105, -1.7617527008057], [-72.683000183105, -2.0108276367187], [-72.683000183105, -2.2599006652832], [-72.683000183105, -2.5089756011962], [-72.550836181641, -2.5413890838623], [-72.427781677246, -2.583055114746], [-72.399453735351, -2.5913883209228], [-72.327508544922, -2.5988880157471], [-72.170007324219, -2.5077777862549], [-72.082231140137, -2.4694438934326], [-72.031396484375, -2.4790073394775], [-71.989801025391, -2.4777770996093], [-71.971398925781, -2.4202781677246], [-71.908479309082, -2.3308330535888], [-71.821954345703, -2.2591663360596], [-71.793199157715, -2.2479167938232], [-71.783204650879, -2.2665267944335], [-71.784173583984, -2.2961097717285], [-71.77431640625, -2.3250003814697], [-71.676675415039, -2.336665725708], [-71.620149230957, -2.3345829010009], [-71.512223815918, -2.3812499999999], [-71.461679077148, -2.44694480896], [-71.288064575195, -2.4605556488037], [-71.001119995117, -2.4119449615479], [-70.87639465332, -2.3783336639404], [-70.758963012695, -2.3253475189209], [-70.557646179199, -2.4581943511963], [-70.549726867676, -2.5012489318848], [-70.482374572754, -2.5838886260986], [-70.464453125, -2.5933319091796], [-70.277746582031, -2.6116672515869], [-70.255804443359, -2.5981708526611], [-70.235647583008, -2.5923992156982], [-70.195387268066, -2.6012798309326], [-70.118826293945, -2.6703468322754], [-70.108862304688, -2.7094303131104], [-70.094587707519, -2.7440162658691], [-70.020681762695, -2.8016582489013], [-69.998480224609, -2.7983337402344], [-69.967504882813, -2.8555561065673], [-70.082413101196, -3.0352779388428], [-70.19732131958, -3.2149997711181], [-70.312231445312, -3.3947216033936], [-70.347235107422, -3.4494434356689], [-70.465841674805, -3.6336112976074], [-70.527502441406, -3.729165649414], [-70.572225952148, -3.7977767944336], [-70.624166870117, -3.8797222137451], [-70.507727050781, -3.9294830322266], [-70.427992248535, -3.9592357635497], [-70.400839233398, -3.9593044281006], [-70.379446411133, -3.9500003814697], [-70.323896789551, -3.9161106109619], [-70.306532287598, -3.9024997711181], [-70.262228393555, -3.8877769470214], [-70.241674804688, -3.8899990081787], [-70.223059082031, -3.899165725708], [-70.134451293945, -3.9712501525879], [-70.081884765625, -4.0374294281005], [-70.062651062012, -4.0748611450195], [-70.05251159668, -4.1058326721191], [-70.044309997559, -4.1318069458007], [-70.036123657227, -4.150832748413], [-70.023069763184, -4.1723609924315], [-69.94084777832, -4.2405563354492], [-69.921118164062, -4.2538887023925], [-69.888616943359, -4.2759719848633], [-69.856680297852, -4.3094440460205], [-69.847516273694, -4.3246479998946], [-69.847761183611, -4.3279940424075], [-69.846742846, -4.3266308089999], [-69.842731482, -4.3250478269999], [-69.841076854, -4.3241612509999], [-69.840169786, -4.3228230039999], [-69.837860831, -4.3217345669998], [-69.835757331, -4.3196445159999], [-69.833284924, -4.3197541689999], [-69.831723048, -4.3106136479999], [-69.830011386, -4.3010825009999], [-69.828674654, -4.2937423749999], [-69.826535423, -4.2814642759999], [-69.825012908, -4.2728685379999], [-69.824511387953, -4.2700131344491], [-69.812647546636, -4.1663211280886], [-69.812647261272, -4.166318605845], [-69.781958007813, -4.0202766418457], [-69.752325439453, -3.8532405853271], [-69.722692871094, -3.6862026214599], [-69.693060302734, -3.5191665649413], [-69.653616333008, -3.2979866027832], [-69.614172363281, -3.0768047332763], [-69.574728393555, -2.8556247711182], [-69.535284423828, -2.63444480896], [-69.525839233398, -2.5822216033935], [-69.507788085937, -2.4863887786865], [-69.494177246094, -2.4111114501953], [-69.483000183105, -2.3492065429687], [-69.483000183105, -2.1095634460448], [-69.483000183105, -1.8699203491211], [-69.483000183105, -1.6302791595458], [-69.483000183105, -1.390636062622], [-69.483000183105, -1.1509929656982], [-69.483000183105, -0.91134986877441], [-69.512648010254, -0.85583267211908], [-69.515287780762, -0.82430610656738], [-69.496321105957, -0.80048522949219], [-69.483000183105, -0.7685848236084], [-69.483000183105, -0.70195922851562], [-69.506536865234, -0.61986122131342], [-69.530416870117, -0.59416542053223], [-69.588621520996, -0.56680450439442], [-69.617094421387, -0.56097183227533], [-69.639456176758, -0.55569419860828], [-69.833479309082, -0.40430603027344], [-69.921667480469, -0.30361137390131], [-69.958059692383, -0.25749931335449], [-69.957510375977, -0.18805465698242], [-69.955526733398, -0.1], [-69.952505493164, 0.04361381530756], [-69.949453735352, 0.20694389343262], [-69.94833984375, 0.26833381652838], [-69.946401977539, 0.41138877868652], [-69.944731140137, 0.48500099182135], [-69.883474731445, 0.4979175567627], [-69.822500610352, 0.49778022766119], [-69.695707702637, 0.50153007507336], [-69.65, 0.53389015197748], [-69.583479309082, 0.57722129821783], [-69.483000183105, 0.60383262634277], [-69.483000183105, 0.78753318786621], [-69.483000183105, 0.97123756408703], [-69.513616943359, 0.97805442810059], [-69.618338012695, 0.97250022888178], [-69.742224121094, 0.97222175598145], [-69.742224121094, 1.1808322906495], [-69.742224121094, 1.3894466400146], [-69.742224121094, 1.5980571746827], [-69.746099853516, 1.610454940796], [-69.684942626953, 1.6075710296631], [-69.600561523438, 1.6452793121339], [-69.483000183105, 1.6762279510499], [-69.483000183105, 1.9148487091064], [-69.483000183105, 2.3534694671632], [-69.483000183105, 2.5920864105226], [-69.483000183105, 2.8307071685791], [-69.483000183105, 3.0693279266359], [-69.483000183105, 3.3079448699952], [-69.483000183105, 3.5465656280518], [-69.483000183105, 3.7851863861083], [-69.483000183105, 4.0238033294678], [-69.483000183105, 4.2624240875245], [-69.483000183105, 4.5010448455811], [-69.483000183105, 4.7396617889404], [-69.483000183105, 4.9782825469972], [-69.483000183105, 5.2169033050537], [-69.483000183105, 5.4555202484131], [-69.483000183105, 5.6941410064697], [-69.483000183105, 5.9327617645264], [-69.483000183105, 6.1713787078858], [-69.483000183105, 6.4099994659424], [-69.624731445312, 6.586665725708], [-69.756210708618, 6.7497211456299], [-69.887689971924, 6.9127765655518], [-70.019171142578, 7.0758319854736], [-70.058485412598, 7.0825000762939], [-70.121817016602, 7.0740276336669], [-70.143347167969, 7.0608325958252], [-70.162298583984, 7.0456958770751], [-70.194731140137, 7.0384746551514], [-70.223623657227, 7.0450016021729], [-70.243902587891, 7.0525012969971], [-70.26083984375, 7.0638881683351], [-70.286123657227, 7.0830570220948], [-70.341680908203, 7.1111103057861], [-70.452505493164, 7.1583324432372], [-70.605098804393, 7.194580142613], [-70.619999313354, 7.1935277779769], [-70.622601334, 7.1926672250001], [-70.626034726, 7.1910773880001], [-70.627380955536, 7.190632158477], [-70.630840861, 7.1894878870001], [-70.63604864, 7.1888071770001], [-70.641712575, 7.1888644800001], [-70.644401356, 7.190057318], [-70.647147534, 7.191477393], [-70.649607785, 7.1914208520001], [-70.651324341, 7.192272972], [-70.654653427, 7.1953406020002], [-70.657170559, 7.1974426590001], [-70.659802861, 7.1977268430002], [-70.662092057, 7.1967611390001], [-70.664209518, 7.195340908], [-70.664768741998, 7.1932877610681], [-70.663866663, 7.1915922010001], [-70.665239952, 7.1900589410001], [-70.667814522, 7.1896047620001], [-70.669931327, 7.1886395060002], [-70.671475812, 7.1859708720001], [-70.673534655, 7.1805210310002], [-70.67353463, 7.1802939790002], [-70.676451351, 7.1773993210001], [-70.678681913, 7.176718292], [-70.679998779297, 7.1779521496486], [-70.719458007812, 7.1874996185302], [-70.757513427734, 7.1825023651124], [-70.786535644531, 7.175071334839], [-70.808203125, 7.1481929779054], [-70.870840454102, 7.1083332061768], [-70.905279541016, 7.0927768707277], [-70.925009155273, 7.0844455718994], [-71.281259155273, 7.063472366333], [-71.362435913086, 7.0874324798584], [-71.432504272461, 7.1223598480225], [-71.563897705078, 7.1233325958251], [-71.588067626953, 7.1288906097413], [-71.653070068359, 7.145000076294], [-71.70139465332, 7.1579166412354], [-71.745286560059, 7.1605564117432], [-71.801950073242, 7.1463886260987], [-71.904664611816, 7.1031261444092], [-71.932778930664, 7.0872226715089], [-71.976876831055, 7.0865283966064], [-72.026803588867, 7.1097446441652],
                ],
            ],
            [
                [
                    [-71.179414749145, 12.323930740357], [-71.18208694458, 12.328405380249], [-71.186027526855, 12.333673477173], [-71.190382003784, 12.3382396698], [-71.21524810791, 12.360097885132], [-71.250659942627, 12.386648178101], [-71.255977630615, 12.389936447143], [-71.260780334473, 12.392221450806], [-71.387996673584, 12.442487716675], [-71.515211105347, 12.492757797241], [-71.520561218262, 12.494386672974], [-71.55909538269, 12.502576828003], [-71.660594940185, 12.513334274292], [-71.668569564819, 12.513250350952], [-71.704021453857, 12.507699966431], [-71.712633132935, 12.504686355591], [-71.749616622925, 12.484563827515], [-71.754457473755, 12.481256484985], [-71.759008407593, 12.477136611939], [-71.762966156006, 12.472398757935], [-71.766700744629, 12.466257095337], [-71.780277252197, 12.43662071228], [-71.782072067261, 12.431596755982], [-71.783494949341, 12.42539024353], [-71.784116744995, 12.418989181519], [-71.783922195435, 12.412508010864], [-71.782918930054, 12.406053543091], [-71.781120300293, 12.399736404419], [-71.778560638428, 12.393667221069], [-71.775024414062, 12.387609481812], [-71.832239151001, 12.358411788941], [-71.837373733521, 12.355424880982], [-71.842195510864, 12.351648330689], [-71.846460342407, 12.347211837768], [-71.850301742554, 12.341829299927], [-71.900825500488, 12.247072219849], [-71.918905258179, 12.235609054566], [-71.917808532715, 12.240713119507], [-71.917182922363, 12.247110366821], [-71.917373657227, 12.253591537476], [-71.918375015259, 12.260046005249], [-71.920167922974, 12.266359329224], [-71.92272567749, 12.272432327271], [-71.92600440979, 12.278150558472], [-71.929943084717, 12.283422470093], [-71.934480667114, 12.2881565094], [-71.939535140991, 12.292268753052], [-71.945020675659, 12.295694351196], [-71.950843811035, 12.298372268677], [-71.95690536499, 12.300256729126], [-71.96259689331, 12.301275253296], [-72, 12.30467414856], [-72.028017044067, 12.307218551636], [-72.033824920654, 12.307291030884], [-72.146455764771, 12.298757553101], [-72.152345657349, 12.297723770142], [-72.158006668091, 12.295923233032], [-72.180841445923, 12.285928726196], [-72.188037872314, 12.281427383423], [-72.19259262085, 12.277318954468], [-72.197925567627, 12.27049446106], [-72.210969924927, 12.247472763062], [-72.213373184204, 12.242074966431], [-72.215194702148, 12.236013412476], [-72.21622467041, 12.229700088501], [-72.216442108154, 12.223253250122], [-72.215847015381, 12.216772079468], [-72.214448928833, 12.210374832153], [-72.212268829346, 12.204172134399], [-72.20934677124, 12.198263168335], [-72.205732345581, 12.192754745483], [-72.201486587524, 12.187738418579], [-72.196681976318, 12.183298110962], [-72.191661834717, 12.17965888977], [-72.186515808105, 12.127668380737], [-72.186454772949, 12.12091255188], [-72.27209854126, 11.946710586548], [-72.289346694946, 11.929372787476], [-72.305505752563, 11.919160842896], [-72.43706703186, 11.843954086304], [-72.468027114868, 11.834360122681], [-72.488561630249, 11.833738327026], [-72.518543243408, 11.836957931519], [-72.525211334229, 11.836809158325], [-72.533679962158, 11.83505821228], [-72.583000183105, 11.816415786743], [-72.583000183105, 11.604734420776], [-72.583000183105, 11.39305305481], [-72.583000183105, 11.181371688843], [-72.583000183105, 10.969690322876], [-72.540008544922, 11.031946182251], [-72.491256713867, 11.122777938843], [-72.472091674805, 11.134721755982], [-72.349868774414, 11.163473129273], [-72.317642211914, 11.164514541626], [-72.209350585938, 11.250001907349], [-72.141036987305, 11.372755050659], [-72.072723388672, 11.49550819397], [-71.968482971191, 11.666250228882], [-71.769729614258, 11.700834274292], [-71.7216796875, 11.72194480896], [-71.626403808594, 11.755556106567], [-71.468063354492, 11.795557022095], [-71.403335571289, 11.812776565552], [-71.324722290039, 11.853055953979], [-71.318632125854, 11.851976394653], [-71.277803421021, 11.835985183716], [-71.248331069946, 11.880727767944], [-71.206165313721, 11.908075332642], [-71.146175384521, 11.942296981812], [-71.100652694702, 11.977476119995], [-71.096607208252, 11.98122215271], [-71.092641830444, 11.985975265503], [-71.089756011963, 11.990449905395], [-71.071943283081, 12.023363113403], [-71.069675445557, 12.028528213501], [-71.067405700684, 12.037031173706], [-71.063457489014, 12.067720413208], [-71.063251495361, 12.074068069458], [-71.063795089722, 12.080278396606], [-71.068080902099, 12.104951858521], [-71.06928062439, 12.110017776489], [-71.071762084961, 12.116849899292], [-71.179414749145, 12.323930740357],
                ],
            ],
        ];
    }
}
