<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * South America/South America - 66°W to 60°W, S hemisphere.
 * @internal
 */
class Extent1830
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-65.817247390747, -58.383241653442], [-65.622104644775, -58.359842300415], [-65.426961898804, -58.336441040039], [-65.231819152832, -58.313039779663], [-65.184354782104, -58.307231903076], [-65.074102401733, -58.293670654297], [-65.001075744629, -58.291568756104], [-64.889621734619, -58.288290023804], [-64.765148162842, -58.272630691528], [-64.640676498413, -58.256973266602], [-64.616083145142, -58.256195068359], [-64.390872955322, -58.2483253479], [-64.165660858154, -58.240453720093], [-63.940450668335, -58.232583999634], [-63.715240478516, -58.224714279175], [-63.697904586792, -58.222393035889], [-63.682847976685, -58.221817016602], [-63.65382194519, -58.217922210693], [-63.574295043945, -58.207220077515], [-63.5442943573, -58.20604133606], [-63.47679901123, -58.203369140625], [-63.371265411377, -58.189008712769], [-63.354135513306, -58.188312530518], [-63.270776748657, -58.184894561768], [-63.252132415771, -58.182334899902], [-63.24072265625, -58.181861877441], [-63.233749389648, -58.181571960449], [-63.02258682251, -58.151626586914], [-62.811422348022, -58.121681213379], [-62.600257873535, -58.091735839844], [-62.389093399048, -58.061790466309], [-62.177930831909, -58.031845092773], [-61.978633880615, -57.980634689331], [-61.77933883667, -57.929426193237], [-61.580043792725, -57.878217697144], [-61.380748748779, -57.82700920105], [-61.198865890503, -57.779333114624], [-61.156747817993, -57.762804031372], [-61.003915786743, -57.722272872925], [-60.851083755493, -57.681739807129], [-60.638313293457, -57.595859527588], [-60.425540924072, -57.509979248047], [-60.212770462036, -57.424098968506], [-60, -57.338216781616], [-60, -57.089967727661], [-60, -56.841718673706], [-60, -56.593469619751], [-60, -56.345220565796], [-60, -56.096971511841], [-60, -55.848722457886], [-60, -55.600473403931], [-60, -55.352224349976], [-60, -55.103975296021], [-60.132616043091, -54.994249343872], [-60.26523399353, -54.884525299072], [-60.397850036621, -54.774801254272], [-60.581476211548, -54.613185882568], [-60.765100479126, -54.451570510864], [-60.948726654053, -54.28995513916], [-61.132350921631, -54.128339767456], [-61.315977096558, -53.966722488403], [-61.499601364136, -53.805107116699], [-61.517477035522, -53.789375305176], [-61.680070877075, -53.71752166748], [-61.838590621948, -53.64624786377], [-61.99711227417, -53.574974060059], [-62.03685760498, -53.55721282959], [-62.057689666748, -53.548152923584], [-62.248603820801, -53.470573425293], [-62.439517974854, -53.392995834351], [-62.630430221558, -53.315418243408], [-62.82134437561, -53.237838745117], [-63.012258529663, -53.160261154175], [-63.108787536621, -53.115180969238], [-63.17267036438, -53.086120605469], [-63.220977783203, -53.064777374268], [-63.355081558228, -53.005996704102], [-63.489185333252, -52.947216033936], [-63.508785247803, -52.939943313599], [-63.716619491577, -52.863283157349], [-63.9244556427, -52.786623001099], [-64.132291793823, -52.709964752197], [-64.326206207275, -52.635765075684], [-64.520120620728, -52.561567306519], [-64.689222335815, -52.472074508667], [-64.763944625854, -52.386938095093], [-64.810234069824, -52.149017333984], [-64.856521606445, -51.911098480225], [-64.902811050415, -51.673177719116], [-64.91189956665, -51.628038406372], [-64.925979614258, -51.56510925293], [-64.946723937988, -51.480609893799], [-65.003932952881, -51.365962982178], [-64.924688339233, -51.173545837402], [-64.845445632935, -50.981126785278], [-64.766202926636, -50.788709640503], [-64.686960220337, -50.596292495728], [-64.607715606689, -50.403875350952], [-64.570625305176, -50.31685256958], [-64.375720977783, -50.161443710327], [-64.180816650391, -50.006036758423], [-63.985912322998, -49.85062789917], [-63.791006088257, -49.695219039917], [-63.596101760864, -49.539810180664], [-63.401197433472, -49.38440322876], [-63.20629119873, -49.228994369507], [-63.095489501953, -49.154817581177], [-62.984687805176, -49.080642700195], [-62.783315658569, -48.956232070923], [-62.581945419312, -48.83182144165], [-62.380573272705, -48.707410812378], [-62.179203033447, -48.583002090454], [-61.977832794189, -48.458591461182], [-61.776460647583, -48.334180831909], [-61.575090408325, -48.209770202637], [-61.527923583984, -48.179588317871], [-61.478960037231, -48.147752761841], [-61.303203582764, -48.030841827393], [-61.127449035645, -47.913930892944], [-60.951692581177, -47.797018051147], [-60.775936126709, -47.680107116699], [-60.778554916382, -47.679992675781], [-60.790994644165, -47.603536605835], [-60.78918838501, -47.584926605225], [-60.776628494263, -47.455186843872], [-60.804138183594, -47.283660888672], [-60.831647872925, -47.112133026123], [-60.859157562256, -46.940605163574], [-60.869213104248, -46.877904891968], [-60.887641906738, -46.83445930481], [-60.887540817261, -46.834175109863], [-60.886560440063, -46.824165344238], [-60.88267326355, -46.784378051758], [-60.873994827271, -46.69536781311], [-60.85694694519, -46.647796630859], [-60.852521896362, -46.602117538452], [-60.843641281128, -46.510290145874], [-60.82621383667, -46.461420059204], [-60.822217941284, -46.419843673706], [-60.813144683838, -46.325210571289], [-60.795339584351, -46.275043487549], [-60.79176902771, -46.237560272217], [-60.7825050354, -46.140129089355], [-60.764329910278, -46.088668823242], [-60.761173248291, -46.055267333984], [-60.751724243164, -45.955043792725], [-60.733182907104, -45.902294158936], [-60.730432510376, -45.872961044312], [-60.721096038818, -45.773084640503], [-60.702644348145, -45.720346450806], [-60.700084686279, -45.692796707153], [-60.688905715942, -45.57221031189], [-60.679935455322, -45.557907104492], [-60.672506332397, -45.536558151245], [-60.627342224121, -45.406148910522], [-60.582180023193, -45.275741577148], [-60.567134857178, -45.26463508606], [-60.399448394775, -45.139644622803], [-60.231761932373, -45.014656066895], [-60.064075469971, -44.889665603638], [-60, -44.819801330566], [-60, -44.570802688599], [-60, -44.321804046631], [-60, -44.072805404663], [-60, -43.823806762695], [-60, -43.574808120728], [-60, -43.32580947876], [-60, -43.076808929443], [-60, -42.827810287476], [-60, -42.578811645508], [-60, -42.32981300354], [-60, -42.080814361572], [-60, -41.831815719604], [-60, -41.582817077637], [-60, -41.33381652832], [-60, -41.084817886353], [-60, -40.835819244385], [-60, -40.586820602417], [-60, -40.337821960449], [-60, -40.088823318481], [-60, -39.839824676514], [-60, -39.590826034546], [-60, -39.341825485229], [-60, -39.092826843262], [-60, -38.843828201294], [-60, -38.594829559326], [-60, -38.345830917358], [-60, -38.096832275391], [-60, -37.847833633423], [-60, -37.598833084106], [-60, -37.349834442139], [-60, -37.100835800171], [-60, -36.851837158203], [-60, -36.602838516235], [-60, -36.353839874268], [-60, -36.1048412323], [-60, -35.855840682983], [-60, -35.606842041016], [-60, -35.357843399048], [-60, -35.10884475708], [-60, -34.859846115112], [-60, -34.610847473145], [-60, -34.361848831177], [-60, -34.11284828186], [-60, -33.863849639893], [-60, -33.614850997925], [-60, -33.365852355957], [-60, -33.116853713989], [-60, -32.867855072021], [-60, -32.618856430054], [-60, -32.369857788086], [-60, -32.12085723877], [-60, -31.871858596802], [-60, -31.622859954834], [-60, -31.373861312866], [-60, -31.124862670898], [-60, -30.875864028931], [-60, -30.626865386963], [-60, -30.377864837646], [-60, -30.128866195679], [-60, -29.879867553711], [-60, -29.630868911743], [-60, -29.381870269775], [-60, -29.132871627808], [-60, -28.88387298584], [-60, -28.634872436523], [-60, -28.385873794556], [-60, -28.136875152588], [-60, -27.88787651062], [-60, -27.638877868652], [-60, -27.389879226685], [-60, -27.140880584717], [-60, -26.891881942749], [-60, -26.642881393433], [-60, -26.393882751465], [-60, -26.144884109497], [-60, -25.895885467529], [-60, -25.646886825562], [-60, -25.397888183594], [-60, -25.148889541626], [-60, -24.89988899231], [-60, -24.650890350342], [-60, -24.401891708374], [-60, -24.152893066406], [-60, -23.903894424438], [-60, -23.654895782471], [-60, -23.405897140503], [-60, -23.156896591187], [-60, -22.907897949219], [-60, -22.658899307251], [-60, -22.409900665283], [-60, -22.160902023315], [-60, -21.911903381348], [-60, -21.66290473938], [-60, -21.413906097412], [-60, -21.164905548096], [-60, -20.915906906128], [-60, -20.66690826416], [-60, -20.417909622192], [-60, -20.168910980225], [-60, -19.919912338257], [-60, -19.670913696289], [-60, -19.421913146973], [-60, -19.172914505005], [-60, -18.923915863037], [-60, -18.674917221069], [-60, -18.425918579102], [-60, -18.176919937134], [-60, -17.927921295166], [-60, -17.67892074585], [-60, -17.429922103882], [-60, -17.180923461914], [-60, -16.931924819946], [-60, -16.682926177979], [-60, -16.433927536011], [-60, -16.184928894043], [-60, -15.935930252075], [-60, -15.686929702759], [-60, -15.437931060791], [-60, -15.188932418823], [-60, -14.939933776855], [-60, -14.690935134888], [-60, -14.44193649292], [-60, -14.192937850952], [-60, -13.943937301636], [-60, -13.694938659668], [-60, -13.4459400177], [-60, -13.196941375732], [-60, -12.947942733765], [-60, -12.698944091797], [-60, -12.449945449829], [-60, -12.200944900513], [-60, -11.951946258545], [-60, -11.702947616577], [-60, -11.453948974609], [-60, -11.204950332642], [-60, -10.955951690674], [-60, -10.706953048706], [-60, -10.45795249939], [-60, -10.208953857422], [-60, -9.9599552154541], [-60, -9.7109565734863], [-60, -9.4619579315186], [-60, -9.2129592895508], [-60, -8.963960647583], [-60, -8.7149620056152], [-60, -8.4659614562988], [-60, -8.2169628143311], [-60, -7.9679641723633], [-60, -7.7189655303955], [-60, -7.4699668884277], [-60, -7.22096824646], [-60, -6.9719696044922], [-60, -6.7229690551758], [-60, -6.473970413208], [-60, -6.2249717712402], [-60, -5.9759731292725], [-60, -5.7269744873047], [-60, -5.4779758453369], [-60, -5.2289772033691], [-60, -4.9799766540527], [-60, -4.730978012085], [-60, -4.4819793701172], [-60, -4.2329807281494], [-60, -3.9839820861816], [-60, -3.7349834442139], [-60, -3.4859848022461], [-60, -3.2369861602783], [-60, -2.9879856109619], [-60, -2.7389869689941], [-60, -2.4899883270264], [-60, -2.2409896850586], [-60, -1.9919910430908], [-60, -1.742992401123], [-60, -1.4939937591553], [-60, -1.2449932098389], [-60, -0.99599456787109], [-60, -0.74699592590332], [-60, -0.49799728393555], [-60, -0.24899864196777], [-60, 0], [-60.239999771118, 0], [-60.479999542236, 0], [-60.719999313354, 0], [-60.959999084473, 0], [-61.199998855591, 0], [-61.439998626709, 0], [-61.680000305176, 0], [-61.920000076294, 0], [-62.159999847412, 0], [-62.39999961853, 0], [-62.639999389648, 0], [-62.879999160767, 0], [-63.119998931885, 0], [-63.359998703003, 0], [-63.60000038147, 0], [-63.840000152588, 0], [-64.079999923706, 0], [-64.319999694824, 0], [-64.559999465942, 0], [-64.799999237061, 0], [-65.039999008179, 0], [-65.279998779297, 0], [-65.520000457764, 0], [-65.760000228882, 0], [-66, 0], [-66, -0.24678611755371], [-66, -0.49357414245605], [-66, -0.74036026000977], [-66, -0.98714828491211], [-66, -1.2339344024658], [-66, -1.4807224273682], [-66, -1.7275085449219], [-66, -1.9742946624756], [-66, -2.2210826873779], [-66, -2.4678688049316], [-66, -2.714656829834], [-66, -2.9614429473877], [-66, -3.20823097229], [-66, -3.4550170898438], [-66, -3.7018051147461], [-66, -3.9485912322998], [-66, -4.1953792572021], [-66, -4.4421653747559], [-66, -4.6889533996582], [-66, -4.9357395172119], [-66, -5.1825256347656], [-66, -5.429313659668], [-66, -5.6760997772217], [-66, -5.922887802124], [-66, -6.1696739196777], [-66, -6.4164619445801], [-66, -6.6632480621338], [-66, -6.9100360870361], [-66, -7.1568222045898], [-66, -7.4036102294922], [-66, -7.6503963470459], [-66, -7.8971843719482], [-66, -8.143970489502], [-66, -8.3907566070557], [-66, -8.637544631958], [-66, -8.8843307495117], [-66, -9.1311187744141], [-66, -9.3779048919678], [-66, -9.6246929168701], [-66, -9.8714790344238], [-66, -10.118267059326], [-66, -10.36505317688], [-66, -10.611841201782], [-66, -10.858627319336], [-66, -11.105415344238], [-66, -11.352201461792], [-66, -11.598987579346], [-66, -11.845775604248], [-66, -12.092561721802], [-66, -12.339349746704], [-66, -12.586135864258], [-66, -12.83292388916], [-66, -13.079710006714], [-66, -13.326498031616], [-66, -13.57328414917], [-66, -13.820072174072], [-66, -14.066858291626], [-66, -14.313646316528], [-66, -14.560432434082], [-66, -14.807220458984], [-66, -15.054006576538], [-66, -15.300792694092], [-66, -15.547580718994], [-66, -15.794366836548], [-66, -16.04115486145], [-66, -16.287940979004], [-66, -16.534894943237], [-66, -16.781850814819], [-66, -17.028804779053], [-66, -17.275758743286], [-66, -17.52271270752], [-66, -17.769668579102], [-66, -18.016622543335], [-66, -18.263576507568], [-66, -18.510530471802], [-66, -18.757484436035], [-66, -19.006725311279], [-66, -19.255966186523], [-66, -19.505207061768], [-66, -19.754447937012], [-66, -20.003688812256], [-66, -20.2529296875], [-66, -20.502170562744], [-66, -20.751411437988], [-66, -21.000652313232], [-66, -21.249893188477], [-66, -21.499135971069], [-66, -21.748376846313], [-66, -21.997617721558], [-66, -22.246858596802], [-66, -22.496099472046], [-66, -22.74534034729], [-66, -22.994581222534], [-66, -23.243822097778], [-66, -23.493062973022], [-66, -23.742303848267], [-66, -23.991544723511], [-66, -24.240785598755], [-66, -24.490026473999], [-66, -24.739267349243], [-66, -24.988508224487], [-66, -25.237749099731], [-66, -25.486989974976], [-66, -25.73623085022], [-66, -25.985471725464], [-66, -26.234712600708], [-66, -26.483953475952], [-66, -26.733194351196], [-66, -26.98243522644], [-66, -27.231676101685], [-66, -27.480916976929], [-66, -27.730157852173], [-66, -27.979398727417], [-66, -28.228639602661], [-66, -28.477880477905], [-66, -28.727121353149], [-66, -28.976362228394], [-66, -29.225603103638], [-66, -29.474843978882], [-66, -29.724084854126], [-66, -29.97332572937], [-66, -30.222566604614], [-66, -30.471807479858], [-66, -30.721048355103], [-66, -30.970289230347], [-66, -31.219530105591], [-66, -31.468770980835], [-66, -31.718011856079], [-66, -31.967252731323], [-66, -32.216493606567], [-66, -32.465734481812], [-66, -32.714975357056], [-66, -32.9642162323], [-66, -33.213457107544], [-66, -33.462697982788], [-66, -33.711938858032], [-66, -33.961179733276], [-66, -34.210420608521], [-66, -34.459661483765], [-66, -34.708902359009], [-66, -34.958143234253], [-66, -35.207384109497], [-66, -35.456624984741], [-66, -35.705865859985], [-66, -35.955106735229], [-66, -36.204347610474], [-66, -36.453588485718], [-66, -36.702829360962], [-66, -36.952070236206], [-66, -37.20131111145], [-66, -37.450551986694], [-66, -37.699792861938], [-66, -37.949033737183], [-66, -38.198274612427], [-66, -38.447515487671], [-66, -38.696756362915], [-66, -38.945997238159], [-66, -39.195238113403], [-66, -39.444478988647], [-66, -39.693719863892], [-66, -39.942960739136], [-66, -40.19220161438], [-66, -40.441442489624], [-66, -40.690685272217], [-66, -40.939926147461], [-66, -41.189167022705], [-66, -41.438407897949], [-66, -41.687648773193], [-66, -41.936889648438], [-66, -42.186130523682], [-66, -42.435371398926], [-66, -42.68461227417], [-66, -42.933853149414], [-66, -43.183094024658], [-66, -43.432334899902], [-66, -43.681575775146], [-66, -43.930816650391], [-66, -44.180057525635], [-66, -44.429298400879], [-66, -44.678539276123], [-66, -44.927780151367], [-66, -45.177021026611], [-66, -45.426261901855], [-66, -45.6755027771], [-66, -45.924743652344], [-66, -46.173984527588], [-66, -46.423225402832], [-66, -46.672466278076], [-66, -46.92170715332], [-66, -47.170948028564], [-66, -47.420188903809], [-66, -47.669429779053], [-66, -47.918670654297], [-66, -48.167911529541], [-66, -48.417152404785], [-66, -48.666393280029], [-66, -48.915634155273], [-66, -49.164875030518], [-66, -49.414115905762], [-66, -49.663356781006], [-66, -49.91259765625], [-66, -50.161838531494], [-66, -50.411079406738], [-66, -50.660320281982], [-66, -50.909561157227], [-66, -51.158802032471], [-66, -51.408042907715], [-66, -51.657283782959], [-66, -51.906524658203], [-66, -52.155765533447], [-66, -52.405006408691], [-66, -52.654247283936], [-66, -52.90348815918], [-66, -53.152729034424], [-66, -53.401969909668], [-66, -53.651210784912], [-66, -53.900451660156], [-66, -54.1496925354], [-66, -54.398933410645], [-66, -54.648174285889], [-66, -54.897415161133], [-66, -55.146656036377], [-66, -55.395896911621], [-66, -55.645137786865], [-66, -55.894378662109], [-66, -56.143619537354], [-66, -56.392860412598], [-66, -56.642101287842], [-66, -56.891342163086], [-66, -57.14058303833], [-66, -57.389823913574], [-66, -57.639064788818], [-66, -57.888305664062], [-66, -58.137546539307], [-66, -58.386787414551], [-65.817247390747, -58.383241653442],
                ],
            ],
        ];
    }
}
