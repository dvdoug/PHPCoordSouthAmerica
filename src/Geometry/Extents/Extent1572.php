<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * South America/Brazil - 54°W to 48°W and Aratu.
 * @internal
 */
class Extent1572
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-53.020872944934, -34.107803650777], [-53.06326907436, -34.086992280924], [-53.085443069872, -34.078622458891], [-53.09074017367, -34.076447774891], [-53.095904119073, -34.073973461447], [-53.100917974249, -34.071207631478], [-53.105765299489, -34.068159353742], [-53.110430201113, -34.064838623101], [-53.264796755366, -33.948151531149], [-53.392070338744, -33.862453572738], [-53.396198507698, -33.85951930175], [-53.400172815995, -33.8563797797], [-53.403983068849, -33.853043060003], [-53.407619492304, -33.849517701922], [-53.445699707758, -33.810682176409], [-53.449307725728, -33.806802112241], [-53.452705171476, -33.802736395329], [-53.455882507459, -33.798496439236], [-53.458830814038, -33.794094146659], [-53.461541814524, -33.789541876019], [-53.464007898409, -33.784852406764], [-53.466222142731, -33.780038903497], [-53.468178331511, -33.775114879017], [-53.469870973199, -33.770094156386], [-53.471295316096, -33.764990830125], [-53.472447361687, -33.759819226643], [-53.473323875871, -33.754593864024], [-53.473922398036, -33.749329411266], [-53.474241247969, -33.744040647106], [-53.474279530573, -33.738742418528], [-53.474037138378, -33.733449599087], [-53.473514751844, -33.72817704715], [-53.472713837451, -33.72293956419], [-53.471636643581, -33.717751853232], [-53.470286194208, -33.712628477576], [-53.468666280405, -33.707583819918], [-53.466781449708, -33.702632041968], [-53.464636993343, -33.697787044701], [-53.462238931377, -33.693062429328], [-53.459593995814, -33.688471459115], [-53.456709611702, -33.684027022153], [-53.453593876282, -33.679741595172], [-53.450255536263, -33.675627208518], [-53.446703963263, -33.671695412384], [-53.442949127504, -33.667957244377], [-53.439001569821, -33.664423198544], [-53.43487237207, -33.6611031959], [-53.43057312602, -33.658006556588], [-53.426115900814, -33.655141973708], [-53.421513209082, -33.652517488914], [-53.361715434626, -33.620489102296], [-53.325287780234, -33.596569698694], [-53.294881707029, -33.574993654498], [-53.280415336642, -33.563855121093], [-53.214315988834, -33.503603079368], [-53.211221688238, -33.500896835142], [-53.208018778035, -33.498320050282], [-53.011528771043, -33.346786908107], [-52.97393599535, -33.317521039175], [-52.807238359768, -33.180013992429], [-52.721617292732, -33.075735534621], [-52.71533809541, -33.065423512706], [-52.607865591511, -32.867082864779], [-52.591057000336, -32.832495956015], [-52.550866324014, -32.730758285361], [-52.544932683777, -32.707625928124], [-52.54006315525, -32.682901068491], [-52.538906536196, -32.677749641166], [-52.537479645326, -32.672666438084], [-52.521923309877, -32.622388728123], [-52.52127257203, -32.620362192164], [-52.470785053719, -32.468697458277], [-52.469114152522, -32.464062362325], [-52.467216974324, -32.459515193955], [-52.465098124721, -32.455066991885], [-52.462762747438, -32.450728554582], [-52.355474386842, -32.262671608781], [-52.3552533821, -32.262286219197], [-52.341642542256, -32.238673243122], [-52.338919245587, -32.234221376394], [-52.335967404273, -32.229917646039], [-52.332795057791, -32.225773773466], [-52.305363569754, -32.191815338407], [-52.301910758998, -32.187766291444], [-52.298247449482, -32.183906648092], [-52.294384014482, -32.18024733758], [-52.290331393966, -32.176798721862], [-52.28610106361, -32.173570566274], [-52.212694844127, -32.120584421254], [-52.208838996712, -32.117936119337], [-52.204863521544, -32.1154710312], [-52.14146325299, -32.078182365428], [-52.136956805802, -32.075685866327], [-52.132327767971, -32.073424764212], [-52.127588425228, -32.071405060178], [-52.122751356062, -32.069632114636], [-52.117829398331, -32.068110633083], [-52.112835615194, -32.066844653621], [-52.112052231508, -32.066688496864], [-52.052297142278, -31.995105689406], [-52.021943067125, -31.954718167869], [-51.983939133626, -31.903957376267], [-51.980429620462, -31.899535682974], [-51.976676186286, -31.895319074608], [-51.972690792561, -31.89132098868], [-51.968486139962, -31.887554166313], [-51.935988733956, -31.860054013725], [-51.93099703964, -31.856095742913], [-51.925763435892, -31.852463345389], [-51.89146167808, -31.830240826468], [-51.887407234268, -31.827749064107], [-51.883238833987, -31.825453016769], [-51.725180667484, -31.743231031905], [-51.721110801125, -31.741229810674], [-51.716954382858, -31.739415179645], [-51.712719961893, -31.737790871276], [-51.671398092347, -31.723005865741], [-51.65692054245, -31.717067011646], [-51.535419680242, -31.650861581969], [-51.417631934737, -31.560933996801], [-51.294753633038, -31.467119917128], [-51.196768621141, -31.388299676066], [-51.13073140704, -31.333835957082], [-51.112008425665, -31.315579463549], [-50.98821030088, -31.189306736354], [-50.920301518669, -31.118381958832], [-50.824058227903, -31.014500311656], [-50.792284446664, -30.977565685172], [-50.759472825152, -30.936464196101], [-50.739442911744, -30.899262192434], [-50.739203534449, -30.898820255954], [-50.723929486597, -30.870789860447], [-50.720636581032, -30.865188057127], [-50.716986816829, -30.859811938755], [-50.637261064296, -30.750215016811], [-50.557535798793, -30.640620671719], [-50.556905990664, -30.639764507584], [-50.502244265131, -30.566278486403], [-50.453318328772, -30.49958662667], [-50.398043672454, -30.411614035361], [-50.360863908117, -30.341353507037], [-50.350240194132, -30.318106435525], [-50.332249337072, -30.275102330811], [-50.327354517166, -30.259828879028], [-50.321866032626, -30.239368685725], [-50.32048430523, -30.234679083115], [-50.318875026673, -30.230062616311], [-50.266094875306, -30.089784753762], [-50.265461512101, -30.088145275122], [-50.175640650285, -29.86158468247], [-50.173233955569, -29.856013759581], [-50.14904114551, -29.804376110045], [-50.146928041823, -29.800130875681], [-50.130616396315, -29.769220383738], [-50.12804965984, -29.764650724161], [-50.032544899097, -29.60459365629], [-50.031710989439, -29.603221265776], [-49.987544424498, -29.531833021147], [-49.985260844323, -29.528309518651], [-49.87484443197, -29.365532571629], [-49.871624692778, -29.361056765808], [-49.832039579252, -29.309112033142], [-49.829112269842, -29.305451929808], [-49.826016683138, -29.30193300387], [-49.822759618749, -29.298562984825], [-49.81934823098, -29.295349275085], [-49.775149306629, -29.255624743289], [-49.769084715796, -29.248122788405], [-49.742985706831, -29.210905814024], [-49.71751222197, -29.168797458163], [-49.714694660819, -29.164403169132], [-49.711651634516, -29.160161893635], [-49.708391434826, -29.156085188481], [-49.704922945283, -29.15218416205], [-49.614087373994, -29.05523935309], [-49.523251802705, -28.95829454413], [-49.519262199988, -28.954271375591], [-49.460374718298, -28.898160993511], [-49.4572294631, -28.895289341083], [-49.453964784764, -28.892554218913], [-49.274242952489, -28.748385365153], [-49.269004829846, -28.744458193333], [-49.246780403576, -28.728905672581], [-49.243630554771, -28.726789309202], [-49.122555878257, -28.648732973753], [-49.001481201743, -28.570676638304], [-48.996515057498, -28.567675293335], [-48.991383189917, -28.564967047518], [-48.986102878336, -28.562561019693], [-48.955753146891, -28.549781783853], [-48.951819757635, -28.548222690958], [-48.947823936993, -28.546831382549], [-48.933724071891, -28.542254020377], [-48.934982239259, -28.54081163853], [-48.938231555516, -28.53666445868], [-48.941257943582, -28.532351903508], [-48.944053003064, -28.527885943441], [-48.946608975673, -28.523278974712], [-48.948918766754, -28.518543784959], [-48.950975964985, -28.513693517722], [-48.952774860168, -28.508741635962], [-48.954310459082, -28.503701884697], [-48.95557849934, -28.498588252843], [-48.96655719807, -28.448726344884], [-48.967556186463, -28.443540778425], [-48.968280031915, -28.438309705393], [-48.968726715761, -28.433047714244], [-48.968894992287, -28.427769479661], [-48.969375644142, -28.33978348723], [-48.96927001373, -28.334609792163], [-48.968896887389, -28.329448488534], [-48.968257264288, -28.324313397423], [-48.967352857226, -28.319218269722], [-48.966186088051, -28.314176749305], [-48.96476008117, -28.309202336496], [-48.963078655183, -28.304308351916], [-48.961146312659, -28.299507900813], [-48.95896822808, -28.294813837968], [-48.956550233981, -28.290238733274], [-48.953898805333, -28.285794838074], [-48.951021042207, -28.281494052354], [-48.947924650756, -28.277347892878], [-48.944617922583, -28.273367462346], [-48.928020174781, -28.254408416936], [-48.92442252354, -28.250512408277], [-48.920623397633, -28.246812594733], [-48.916633480953, -28.243319380911], [-48.912463993935, -28.24004259042], [-48.908126662002, -28.236991438242], [-48.903633682587, -28.23417450482], [-48.89899769084, -28.23159971193], [-48.894231724084, -28.229274300397], [-48.889349185161, -28.227204809738], [-48.884363804737, -28.225397059771], [-48.879289602687, -28.223856134247], [-48.874140848671, -28.222586366552], [-48.868932022003, -28.221591327525], [-48.863677770935, -28.220873815412], [-48.85839287146, -28.220435847999], [-48.85309218576, -28.220278656937], [-48.847790620413, -28.220402684278], [-48.842503084468, -28.220807581233], [-48.837244447522, -28.221492209152], [-48.832029497902, -28.222454642726], [-48.826872901079, -28.2236921754], [-48.821789158422, -28.225201326989], [-48.816792566422, -28.22697785346], [-48.811897176483, -28.229016758868], [-48.807116755411, -28.231312309408], [-48.802464746694, -28.233858049539], [-48.797954232701, -28.236646820136], [-48.79359789789, -28.239670778623], [-48.789407993137, -28.242921421032], [-48.785396301281, -28.246389605913], [-48.781574103994, -28.250065580045], [-48.77795215005, -28.253939005861], [-48.774140254451, -28.258238632396], [-48.749215964328, -28.197779418326], [-48.727975050332, -28.072842352468], [-48.718578614301, -27.986909953566], [-48.717800966583, -27.981282639859], [-48.716705026659, -27.97570856494], [-48.71529433128, -27.970205717124], [-48.713573432957, -27.964791854872], [-48.711547885268, -27.959484449471], [-48.672349593303, -27.864929729039], [-48.672441602058, -27.86480122957], [-48.674607577109, -27.861509582901], [-48.706551852011, -27.810816070938], [-48.70932689063, -27.80613448521], [-48.711843130431, -27.801308863848], [-48.714093118795, -27.796353499418], [-48.716070191687, -27.791283068761], [-48.717768493396, -27.786112589521], [-48.719182993877, -27.780857375667], [-48.720309503651, -27.775532992135], [-48.740447290516, -27.665669710885], [-48.741252840544, -27.660522134133], [-48.741789187811, -27.65533958757], [-48.742054876324, -27.650136139975], [-48.742049184833, -27.644925916863], [-48.741772128789, -27.639723062145], [-48.741224460299, -27.634541699729], [-48.740407666091, -27.629395895177], [-48.739323963471, -27.624299617526], [-48.737976294308, -27.619266701364], [-48.736368317047, -27.614310809275], [-48.734504396775, -27.609445394752], [-48.732389593376, -27.60468366567], [-48.730029647792, -27.600038548437], [-48.727430966439, -27.595522652901], [-48.724600603817, -27.591148238118], [-48.721546243357, -27.586927179075], [-48.718276176566, -27.582870934452], [-48.715227557416, -27.579284748327], [-48.739569906042, -27.480984564816], [-48.74062860565, -27.476212219796], [-48.741452820321, -27.471393839153], [-48.742040580503, -27.466540936947], [-48.742390481676, -27.461665109733], [-48.742501687712, -27.456778008847], [-48.742373932872, -27.451891312565], [-48.742007522441, -27.447016698196], [-48.720065383769, -27.227154713943], [-48.71942415542, -27.222058102194], [-48.718522057118, -27.21700114226], [-48.717361469196, -27.211997177752], [-48.715945454055, -27.207059412443], [-48.714277748081, -27.202200875431], [-48.712362751786, -27.197434386754], [-48.7102055182, -27.192772523567], [-48.707811739534, -27.188227586953], [-48.705187732162, -27.183811569468], [-48.702340419954, -27.17953612349], [-48.699277316006, -27.175412530479], [-48.696006502815, -27.171451671204], [-48.693535400992, -27.168754259033], [-48.69766348203, -27.16220329379], [-48.700449661405, -27.157501711717], [-48.702974828221, -27.152654939384], [-48.705231440392, -27.147677452969], [-48.707212757944, -27.142584119065], [-48.708912863143, -27.137390150273], [-48.710326678171, -27.132111059768], [-48.711449980292, -27.126762614962], [-48.712279414465, -27.121360790413], [-48.712812503362, -27.115921720113], [-48.729200442815, -26.883423551168], [-48.729447140358, -26.876791526371], [-48.729681143733, -26.818168313886], [-48.743881752628, -26.805911789603], [-48.747678527974, -26.802460934164], [-48.751293311843, -26.798819884334], [-48.754716588712, -26.794998224777], [-48.757939347178, -26.791006015596], [-48.760953103684, -26.786853765843], [-48.763749924844, -26.782552405862], [-48.766322448333, -26.778113258513], [-48.768663902263, -26.773548009366], [-48.770768123014, -26.76886867594], [-48.772629571455, -26.764087576067], [-48.774243347526, -26.759217295472], [-48.775605203138, -26.754270654634], [-48.781785012708, -26.729341608003], [-48.782872104113, -26.724430599219], [-48.783710880241, -26.719471140618], [-48.784299219007, -26.71447577952], [-48.784635631927, -26.709457154075], [-48.784719267885, -26.704427961294], [-48.784444609681, -26.672205213491], [-48.784354591534, -26.66873073744], [-48.781218910382, -26.596327783338], [-48.780899866758, -26.59157889057], [-48.780355220328, -26.58685055771], [-48.779586204923, -26.582153496218], [-48.778594562651, -26.577498346707], [-48.771728107573, -26.548651605984], [-48.770461253198, -26.543859847083], [-48.768958529229, -26.53913674492], [-48.767223627237, -26.534493902208], [-48.765260809161, -26.529942724495], [-48.763074896835, -26.525494392147], [-48.726133368514, -26.454800422421], [-48.72366953882, -26.450363527423], [-48.723452938097, -26.450016243405], [-48.821235959405, -26.364859378657], [-48.825034004379, -26.361375642687], [-48.828647520404, -26.35770085509], [-48.832066909416, -26.353844776678], [-48.835283088984, -26.349817649795], [-48.838287516432, -26.34563017112], [-48.841072211532, -26.341293463251], [-48.843629777699, -26.336819045161], [-48.845953421637, -26.332218801604], [-48.848036971386, -26.327504951544], [-48.849874892711, -26.322690015704], [-48.851462303807, -26.317786783305], [-48.852794988262, -26.312808278099], [-48.890568120586, -26.155585530297], [-48.891644735783, -26.150533181524], [-48.892459008118, -26.145431976865], [-48.893008764677, -26.140295529053], [-48.893292538418, -26.135137544866], [-48.89330957208, -26.129971788556], [-48.891852357725, -26.065316484601], [-48.891599769251, -26.060118679399], [-48.891077123769, -26.05494105238], [-48.890285836653, -26.049797625065], [-48.889228050787, -26.044702326358], [-48.887906630758, -26.039668954828], [-48.886325155101, -26.034711141339], [-48.884487906608, -26.029842312134], [-48.882399860727, -26.025075652481], [-48.880066672091, -26.020424070961], [-48.877494659203, -26.015900164512], [-48.874690787327, -26.011516184317], [-48.871662649623, -26.007284002623], [-48.868418446583, -26.003215080593], [-48.864966963827, -25.999320437267], [-48.86131754831, -25.99561061972], [-48.857480083006, -25.992095674502], [-48.853464960146, -25.988785120429], [-48.849283053078, -25.985687922805], [-48.844945686814, -25.982812469145], [-48.840464607369, -25.980166546461], [-48.835851949944, -25.977757320168], [-48.831120206067, -25.975591314689], [-48.826282189765, -25.973674395778], [-48.82135100286, -25.97201175464], [-48.818989137936, -25.971350064901], [-48.823335979944, -25.968776020057], [-48.827707278022, -25.965867196876], [-48.831919870413, -25.96273294026], [-48.835962143211, -25.959381891198], [-48.839822952072, -25.955823288364], [-48.84349165294, -25.952066942649], [-48.846958131389, -25.948123210108], [-48.850212830512, -25.944002963416], [-48.853246777267, -25.939717561886], [-48.856051607215, -25.935278820155], [-48.85861958758, -25.930698975612], [-48.860943638568, -25.925990654659], [-48.863017352888, -25.921166837902], [-48.864835013413, -25.916240824361], [-48.866391608943, -25.911226194809], [-48.867682848024, -25.906136774329], [-48.868705170773, -25.900986594197], [-48.869455758698, -25.895789853204], [-48.869932542465, -25.890560878502], [-48.870134207606, -25.885314086114], [-48.87006019814, -25.880063941184], [-48.869710718107, -25.874824918098], [-48.869086731007, -25.869611460581], [-48.868189957139, -25.864437941873], [-48.867022868866, -25.859318625107], [-48.865588683791, -25.854267623982], [-48.86389135589, -25.849298863857], [-48.861935564612, -25.844426043353], [-48.859726701974, -25.839662596592], [-48.846672807931, -25.813345000157], [-48.844189833285, -25.808655924107], [-48.841461643533, -25.804105146374], [-48.838495919235, -25.799705478582], [-48.835301009678, -25.795469306935], [-48.831885909361, -25.791408557359], [-48.828260232679, -25.787534661918], [-48.824434186852, -25.783858526634], [-48.820418543194, -25.780390500782], [-48.816224606785, -25.777140347756], [-48.811864184645, -25.774117217581], [-48.807349552495, -25.771329621153], [-48.802693420197, -25.768785406281], [-48.797908895972, -25.76649173559], [-48.7930094495, -25.764455066358], [-48.788008873994, -25.76268113234], [-48.782921247373, -25.761174927619], [-48.777760892627, -25.759940692554], [-48.637709331005, -25.730348308639], [-48.598562152768, -25.70823583054], [-48.581668366073, -25.674448257149], [-48.579518825232, -25.670385387389], [-48.577184856284, -25.666425586201], [-48.551277820394, -25.624694962584], [-48.592843100225, -25.630024172977], [-48.597771325658, -25.630532303048], [-48.602718669604, -25.630795722799], [-48.607672988509, -25.63081378565], [-48.6126221217, -25.630586447265], [-48.617553921231, -25.630114265661], [-48.622456281704, -25.629398399834], [-48.66134330563, -25.622732216363], [-48.666537562248, -25.621699514777], [-48.67166986288, -25.620393274143], [-48.676725813079, -25.618817158044], [-48.681691232536, -25.616975586977], [-48.74572092614, -25.591279786196], [-48.75084405506, -25.589055765827], [-48.755835029689, -25.586549196701], [-48.760678281822, -25.583767897489], [-48.765358704039, -25.580720543817], [-48.769861696833, -25.577416641211], [-48.774173214145, -25.57386649544], [-48.778279807182, -25.570081180372], [-48.800080802055, -25.548829501905], [-48.80381118622, -25.54499317931], [-48.807331021847, -25.540962807835], [-48.810630230545, -25.536749927699], [-48.813699365643, -25.532366601699], [-48.816529639244, -25.527825380672], [-48.819112947388, -25.523139267559], [-48.821441893253, -25.518321680172], [-48.823509808336, -25.513386412775], [-48.825310771547, -25.508347596587], [-48.826839626165, -25.503219659318], [-48.828091994598, -25.498017283863], [-48.829064290922, -25.492755366253], [-48.82975373115, -25.487448973011], [-48.830158341196, -25.482113298004], [-48.830276962535, -25.476763618943], [-48.830109255518, -25.471415253639], [-48.829655700342, -25.466083516139], [-48.828917595677, -25.460783672879], [-48.827897054949, -25.455530898974], [-48.816231710711, -25.403033035205], [-48.81493913181, -25.397869171054], [-48.81337359981, -25.392781405067], [-48.811539550843, -25.387784154066], [-48.809442181916, -25.382891578388], [-48.807087436187, -25.37811754176], [-48.804481986124, -25.373475572011], [-48.801633214594, -25.368978822746], [-48.79854919395, -25.364640036067], [-48.795238663151, -25.360471506469], [-48.791711003, -25.356485046004], [-48.787976209564, -25.352691950807], [-48.784044865849, -25.349102969089], [-48.77992811181, -25.345728270679], [-48.775637612785, -25.342577418207], [-48.771185526441, -25.33965934001], [-48.766584468322, -25.336982304827], [-48.761847476104, -25.334553898374], [-48.756987972647, -25.332381001843], [-48.752019727963, -25.330469772411], [-48.746956820197, -25.328825625784], [-48.741813595731, -25.327453220859], [-48.71299355789, -25.320579136386], [-48.707836457263, -25.319491862796], [-48.70262923477, -25.318677808344], [-48.697386354957, -25.3181392343], [-48.692122381416, -25.317877636705], [-48.686851936335, -25.317893742223], [-48.681589659878, -25.318187506114], [-48.676350169517, -25.318758112367], [-48.671148019431, -25.319603975959], [-48.665997660074, -25.320722747264], [-48.660913398038, -25.322111318575], [-48.65590935631, -25.32376583274], [-48.650999435042, -25.325681693873], [-48.64619727294, -25.327853580125], [-48.64151620938, -25.330275458461], [-48.636969247348, -25.332940601426], [-48.601179884153, -25.355205561025], [-48.547364754535, -25.367071752148], [-48.547203688596, -25.363949636131], [-48.54667446985, -25.35883044514], [-48.545882581387, -25.353745260626], [-48.54483012062, -25.348707551303], [-48.543519875114, -25.343730660146], [-48.537134071892, -25.321784706776], [-48.535307308121, -25.31613720836], [-48.523916622086, -25.284192933458], [-48.522060243086, -25.279382635403], [-48.519958391543, -25.274674415946], [-48.517616655254, -25.27008079194], [-48.515041259748, -25.265613975585], [-48.512239051745, -25.261285841961], [-48.509217480944, -25.257107897459], [-48.505984580225, -25.253091249191], [-48.502548944291, -25.249246575461], [-48.498919706817, -25.245584097377], [-48.495106516172, -25.242113551676], [-48.491119509764, -25.238844164843], [-48.486969287094, -25.235784628578], [-48.482666881575, -25.232943076693], [-48.447945507064, -25.211275596224], [-48.443524849539, -25.208672060547], [-48.43897648289, -25.206298672291], [-48.434312378697, -25.204161678361], [-48.429544813167, -25.202266703455], [-48.424686334824, -25.200618735262], [-48.419749731478, -25.199222111336], [-48.414747996573, -25.198080507676], [-48.40969429498, -25.197196929053], [-48.404601928349, -25.1965737011], [-48.399484300103, -25.19621246419], [-48.394354880149, -25.196114169121], [-48.389227169436, -25.196279074612], [-48.384114664411, -25.196706746622], [-48.3790308215, -25.197396059491], [-48.373989021687, -25.198345198907], [-48.369002535299, -25.199551666676], [-48.332892610982, -25.209275330006], [-48.327707529784, -25.210823185965], [-48.322613766475, -25.212649247424], [-48.317626236065, -25.214748167507], [-48.312759542506, -25.217113800382], [-48.308027935925, -25.219739219256], [-48.303445270905, -25.222616736661], [-48.299024965912, -25.225737926959], [-48.298035141094, -25.226520395149], [-48.268883459834, -25.211946497705], [-48.26379295744, -25.209577805195], [-48.258577538091, -25.207498545751], [-48.25325364283, -25.205715274014], [-48.247838054664, -25.204233611556], [-48.242347845648, -25.203058229156], [-48.152237066839, -25.186397538849], [-48.147058548637, -25.185579834088], [-48.141844292282, -25.185034652922], [-48.136608629518, -25.18476349382], [-48.131365950925, -25.18476710208], [-48.12613066637, -25.185045467786], [-48.120917165393, -25.18559782583], [-48.116325506547, -25.186329342999], [-48.092753461547, -25.1611312548], [-48.089136223595, -25.157458960592], [-48.085334561069, -25.153977938157], [-48.081358575046, -25.150697436626], [-48.079606125261, -25.149397299518], [-48.094434353295, -25.142861922415], [-48.099115121475, -25.140652537475], [-48.103675300084, -25.138203916718], [-48.108102671961, -25.135522620235], [-48.112385375746, -25.132615831482], [-48.116511937658, -25.129491338028], [-48.120471302238, -25.126157510694], [-48.124252861962, -25.122623281129], [-48.127846485663, -25.118898117877], [-48.131242545676, -25.114992001014], [-48.134431943624, -25.110915395405], [-48.137406134801, -25.106679222673], [-48.140157151058, -25.102294831939], [-48.142677622156, -25.097773969409], [-48.144960795508, -25.093128746917], [-48.14700055427, -25.088371609462], [-48.14879143373, -25.083515301881], [-48.150328635947, -25.078572834693], [-48.151608042608, -25.073557449248], [-48.152626226058, -25.068482582252], [-48.153380458484, -25.063361829768], [-48.153868719224, -25.058208910788], [-48.15408970018, -25.053037630484], [-48.154042809322, -25.047861843219], [-48.153728172277, -25.042695415431], [-48.153146631987, -25.037552188481], [-48.152299746454, -25.032445941576], [-48.151189784569, -25.027390354847], [-48.149819720026, -25.022398972702], [-48.148193223361, -25.017485167541], [-48.146314652119, -25.012662103924], [-48.144189039173, -25.007942703309], [-48.141822079247, -25.003339609429], [-48.139220113657, -24.998865154419], [-48.136390113323, -24.99453132578], [-48.13333966009, -24.990349734261], [-48.105351226252, -24.953997576668], [-48.101963106807, -24.949833211068], [-48.098356384505, -24.945856673822], [-48.094541454386, -24.942079425827], [-48.090529311573, -24.938512353599], [-48.08633151958, -24.935165737903], [-48.081960176988, -24.932049224119], [-48.077427882572, -24.929171794441], [-48.07274769899, -24.926541741995], [-48.067933115137, -24.924166646932], [-48.062998007268, -24.922053354585], [-48.057956599001, -24.920207955734], [-48.052823420329, -24.918635769058], [-48.047613265735, -24.917341325803], [-48.042341151561, -24.916328356722], [-48.037022272721, -24.915599781322], [-48.010912577286, -24.912734943676], [-48.005681293369, -24.91229955716], [-48.000434369908, -24.912139285398], [-47.99518626527, -24.912254570033], [-47.989951441075, -24.912645093388], [-47.984744322349, -24.913309779341], [-47.979579257772, -24.91424679629], [-47.974470480142, -24.915453562201], [-47.96943206715, -24.916926751723], [-47.964477902595, -24.918662305352], [-47.959621638118, -24.920655440613], [-47.95487665559, -24.922900665245], [-47.950256030233, -24.925391792331], [-47.945772494595, -24.928121957348], [-47.941438403457, -24.931083637082], [-47.937265699794, -24.934268670361], [-47.933265881864, -24.93766828054], [-47.929449971523, -24.941273099691], [-47.925828483852, -24.945073194412], [-47.922411398184, -24.949058093203], [-47.919208130603, -24.95321681532], [-47.916227507999, -24.957537901032], [-47.913477743744, -24.962009443203], [-47.910966415058, -24.966619120098], [-47.908700442133, -24.971354229341], [-47.906686069059, -24.976201722916], [-47.904928846621, -24.981148243121], [-47.903433617001, -24.986180159379], [-47.90220450044, -24.991283605795], [-47.901244883877, -24.996444519367], [-47.900557411621, -25.001648678736], [-47.900143978063, -25.006881743377], [-47.900005722458, -25.012129293112], [-47.900000000412, -25.075191960959], [-47.900136068973, -25.080415943935], [-47.900544851079, -25.085625685768], [-47.901225230405, -25.09080695943], [-47.902175348937, -25.095945615632], [-47.903392612042, -25.101027621468], [-47.904873695557, -25.106039098735], [-47.906614554861, -25.110966361836], [-47.908610435928, -25.115795955148], [-47.910855888302, -25.120514689768], [-47.913344779988, -25.125109679535], [-47.916070314192, -25.129568376215], [-47.919025047886, -25.133878603771], [-47.922200912132, -25.138028591612], [-47.925589234116, -25.142007006738], [-47.929180760835, -25.145802984689], [-47.932188240017, -25.148666047125], [-47.928953010121, -25.15176659938], [-47.925388510248, -25.155557637327], [-47.922026040593, -25.159528962783], [-47.918874705925, -25.16366982234], [-47.91594303931, -25.167969003532], [-47.913238979008, -25.172414865196], [-47.910769846971, -25.176995368994], [-47.908542329023, -25.181698112008], [-47.906562456755, -25.186510360325], [-47.904835591192, -25.191419083518], [-47.903366408275, -25.196410989929], [-47.902158886204, -25.20147256266], [-47.901216294661, -25.206590096171], [-47.900541185962, -25.211749733397], [-47.90013538814, -25.216937503264], [-47.9, -25.22213935852], [-47.9, -33.491727828979], [-47.900137999861, -33.496979583767], [-47.900551618567, -33.502216843725], [-47.90123971453, -33.507425154032], [-47.902200388607, -33.512590139765], [-47.90343098934, -33.517697545578], [-47.904928120276, -33.522733275045], [-47.906687649336, -33.527683429567], [-47.908704720226, -33.532534346731], [-47.910973765835, -33.537272638019], [-47.913488523604, -33.54188522576], [-47.916242052808, -33.546359379225], [-47.919226753715, -33.550682749763], [-47.922434388557, -33.554843404882], [-47.925856104272, -33.558829861187], [-47.929482456935, -33.562631116068], [-47.93330343782, -33.566236678074], [-47.935284581949, -33.567918481034], [-47.936204994862, -33.568824031733], [-47.939891177997, -33.572108815692], [-47.942910510883, -33.574668477557], [-47.94299974652, -33.574744038109], [-47.946993734557, -33.578121952537], [-47.948924136054, -33.579713597212], [-47.949783107655, -33.580403964307], [-47.950336759754, -33.58093616797], [-47.954687265909, -33.58466312001], [-47.972352724189, -33.598939938851], [-47.976477871508, -33.602892794066], [-47.980925643007, -33.606682138183], [-47.99234072238, -33.615845562546], [-47.993495162361, -33.616951306235], [-47.997962377537, -33.62075375], [-48.067567816419, -33.676564549076], [-48.068331901746, -33.67743517839], [-48.072312678392, -33.68171224976], [-48.076536459817, -33.685749525163], [-48.080988826065, -33.689533221372], [-48.081205269854, -33.689706528376], [-48.081305599497, -33.689820768315], [-48.084659236826, -33.693454126863], [-48.088188371501, -33.696917273715], [-48.09188437543, -33.70020174211], [-48.093679094161, -33.701718900522], [-48.097244333253, -33.705545699254], [-48.101466409583, -33.70957773305], [-48.105916584026, -33.713356512284], [-48.125127277436, -33.72872675574], [-48.164945343647, -33.773980161226], [-48.168931199524, -33.778251744611], [-48.173159708725, -33.782283268099], [-48.177616437878, -33.786060970702], [-48.185841525064, -33.792629790332], [-48.210727972874, -33.820868479805], [-48.214713544265, -33.825133242805], [-48.218941162625, -33.829158193211], [-48.223396423197, -33.832929616816], [-48.230367457924, -33.838489697945], [-48.239628918853, -33.848988054442], [-48.243617528804, -33.853251718727], [-48.24784816767, -33.857275341131], [-48.251929431333, -33.860726431747], [-48.255324367411, -33.86372403731], [-48.26004588647, -33.867687448236], [-48.262626121681, -33.869910535989], [-48.268980064551, -33.875064842788], [-48.270834931003, -33.876829135479], [-48.275296180858, -33.880601644837], [-48.2757857455, -33.880991682601], [-48.275875855791, -33.881080798922], [-48.279189874203, -33.884077560883], [-48.28120212701, -33.885817062836], [-48.284301125754, -33.888388820828], [-48.285644833181, -33.889458972182], [-48.288149441435, -33.891725853355], [-48.290159786894, -33.893465355308], [-48.291296119689, -33.894433856224], [-48.296299095153, -33.898633837913], [-48.298556271606, -33.90047337827], [-48.467921142655, -34.03444550024], [-48.637287709585, -34.168419362282], [-48.793048696334, -34.291632203742], [-48.793206074779, -34.291891715557], [-48.793223552016, -34.291930142093], [-48.793777776458, -34.292998685564], [-48.794824675227, -34.295656486679], [-48.796978788311, -34.300387997362], [-48.799375888483, -34.305001164094], [-48.800329562799, -34.306725407258], [-48.801224785726, -34.308269736462], [-48.802288833786, -34.311190972702], [-48.804551781489, -34.316859436495], [-48.807156326339, -34.322379287959], [-48.809788286416, -34.327175152763], [-48.809969865115, -34.32751434926], [-48.810088711352, -34.327722576484], [-48.810092765779, -34.327729964317], [-48.810097945817, -34.327738755935], [-48.81010819574, -34.327756714543], [-48.811698191503, -34.331153444809], [-48.812619440893, -34.332978777451], [-48.814459314187, -34.336452750502], [-48.81643430515, -34.339851725818], [-48.851059554469, -34.396833435328], [-48.860834908977, -34.423596517773], [-48.862731138475, -34.428399449006], [-48.864872766393, -34.433098093981], [-48.865706279052, -34.434701834805], [-48.865752942118, -34.434819161402], [-48.868116873092, -34.439910568253], [-48.870762769574, -34.444861308114], [-48.87168974101, -34.446484461801], [-48.873262802346, -34.44914274261], [-48.979794617709, -34.622985315914], [-49.086327540551, -34.796824676634], [-49.192860463377, -34.970665944674], [-49.195391843806, -34.974588143433], [-49.19583792596, -34.975213227049], [-49.203667124204, -34.987899838398], [-49.206186243968, -34.991778247944], [-49.207534620535, -34.993657847177], [-49.209112427067, -34.996084663762], [-49.21180582043, -34.999836177051], [-49.214669549541, -35.003459335251], [-49.217528187591, -35.006751418583], [-49.218883311005, -35.008835210574], [-49.221583020918, -35.012593869591], [-49.222573788192, -35.013846596509], [-49.223743287564, -35.015645688855], [-49.22611920205, -35.018953640585], [-49.227527674271, -35.021084479181], [-49.23015279213, -35.024566238733], [-49.230848016078, -35.025503573746], [-49.231174175442, -35.025920924998], [-49.231257652698, -35.026031642972], [-49.231367830347, -35.026168724466], [-49.233949618179, -35.029472362206], [-49.236901120194, -35.032880407628], [-49.238357271085, -35.035119111457], [-49.241058612052, -35.038879163873], [-49.242488514919, -35.040686646002], [-49.242991878911, -35.041387758928], [-49.245836675719, -35.044989093726], [-49.248843712307, -35.048456111491], [-49.250791115261, -35.050599971354], [-49.250909653569, -35.050730237305], [-49.256582577541, -35.056953396386], [-49.258659020866, -35.059577586609], [-49.260815757772, -35.062056803895], [-49.261261023789, -35.06277687271], [-49.263796230291, -35.066671422191], [-49.266509631035, -35.070443986845], [-49.269395366489, -35.0740864199], [-49.269474292141, -35.074177050473], [-49.272706591203, -35.078114268955], [-49.273965545758, -35.079567193937], [-49.276772070656, -35.082874127434], [-49.290018779281, -35.097640679015], [-49.292457365518, -35.100442593976], [-49.29424965448, -35.102446859366], [-49.437266263503, -35.258114893633], [-49.580283284851, -35.413785284048], [-49.723300100036, -35.569453542715], [-49.723570243897, -35.569732938205], [-49.723567524859, -35.569735453983], [-49.727510014484, -35.573996470829], [-49.731527773073, -35.578096247375], [-49.731775133928, -35.578321245652], [-49.736468127473, -35.583392079075], [-49.740503487644, -35.587507769813], [-49.744769272009, -35.591384124505], [-49.749251308335, -35.595008264724], [-49.751308080859, -35.596575517492], [-49.762387796475, -35.608542308057], [-49.766413938235, -35.612647470968], [-49.76816877711, -35.614242116632], [-49.768401517117, -35.614493293543], [-49.772432010293, -35.618599525645], [-49.776691997677, -35.622467150861], [-49.779193242995, -35.624488217637], [-49.780718310214, -35.62587138853], [-49.782996791524, -35.627711568072], [-49.783359914395, -35.628103423084], [-49.787395233953, -35.632213958842], [-49.787547902247, -35.632352527017], [-49.788324569162, -35.633190982419], [-49.788576544076, -35.633447676234], [-49.790339642833, -35.635350238858], [-49.794385661431, -35.639470974166], [-49.798662806743, -35.6433512775], [-49.803156814178, -35.646978207765], [-49.825115286735, -35.663676385287], [-49.826452431487, -35.664895091998], [-49.830780370552, -35.668418443889], [-49.850845947783, -35.683843056236], [-49.860876694243, -35.691546837364], [-49.8612992601, -35.691869592535], [-49.863765766481, -35.693743144315], [-49.865576120435, -35.695581992202], [-49.867968601258, -35.69774697546], [-49.869534036194, -35.699338813102], [-49.870143457459, -35.699890486218], [-49.872537562424, -35.702322275958], [-49.876809295546, -35.70618830399], [-49.881296584291, -35.709801905562], [-49.903913824647, -35.72696537392], [-49.934565482823, -35.768209681692], [-49.937837553994, -35.772377188124], [-49.941325771688, -35.776365533259], [-49.945020342888, -35.780163519995], [-49.948910895249, -35.783760485652], [-49.952986506215, -35.787146331906], [-49.957235733689, -35.790311553143], [-49.961646648151, -35.793247263144], [-49.966206866154, -35.795945220032], [-49.970903585086, -35.798397849413], [-49.975723619115, -35.800598265637], [-49.980653436209, -35.802540291133], [-49.985679196122, -35.804218473749], [-49.990786789256, -35.805628102062], [-49.995961876268, -35.806765218603], [-50.001189928328, -35.807626630966], [-50.006456267911, -35.808209920776], [-50.01174611, -35.80851345047], [-50.017044603596, -35.808536367903], [-50.022336873413, -35.808278608735], [-50.027608061636, -35.807740896614], [-50.032843369635, -35.806924741142], [-50.038028099515, -35.805832433641], [-50.043147695374, -35.804467040716], [-50.048187784173, -35.802832395646], [-50.053134216084, -35.800933087627], [-50.057973104218, -35.798774448881], [-50.062690863608, -35.796362539692], [-50.100852686972, -35.775559449569], [-50.266239013431, -35.688493514959], [-50.432269687257, -35.601089374392], [-50.437725230511, -35.597995116157], [-50.447427913007, -35.592082335395], [-50.447521203973, -35.592025414276], [-50.577685570534, -35.512508497889], [-50.707503727438, -35.43320614397], [-50.858261041285, -35.342793239933], [-51.009365014674, -35.252169384342], [-51.160071377853, -35.161783993495], [-51.312008497013, -35.072565546158], [-51.46397451554, -34.983328226219], [-51.677216126644, -34.860558047743], [-51.758732801597, -34.814992104327], [-51.947352759738, -34.7127132187], [-51.947463268653, -34.712653205463], [-52.161120647804, -34.596449897358], [-52.165087562752, -34.594173318828], [-52.303906303596, -34.510228998149], [-52.44228016936, -34.426553695445], [-52.605370992732, -34.330233403067], [-52.691527501136, -34.281316214696], [-52.742482182247, -34.253028253354], [-52.915326880984, -34.159614157974], [-53.020087373937, -34.108220519305], [-53.020872944934, -34.107803650777],
                ],
                [
                    [-48.737666982845, -25.983568227655], [-48.736608310092, -25.984231329813], [-48.732347736406, -25.987219387997], [-48.72824837582, -25.990425042788], [-48.724321329805, -25.993839612958], [-48.720577233186, -25.997453851516], [-48.717026225343, -26.001257970751], [-48.713677922755, -26.005241668735], [-48.710541392952, -26.009394157223], [-48.707625129964, -26.013704190869], [-48.706190922293, -26.016081594594], [-48.705686446246, -26.013769022065], [-48.704207560541, -26.008429434987], [-48.702435212969, -26.003179951473], [-48.700374844333, -25.998036686541], [-48.693790045605, -25.982833427708], [-48.737666982845, -25.983568227655],
                ],
            ],
        ];
    }
}
