var state_arr = new Array("Andaman & Nicobar", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra & Nagar Haveli", "Daman & Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu & Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Odisha","Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Tripura","Telangana", "Uttar Pradesh", "Uttarakhand", "West Bengal");

var s_a = new Array();
s_a[0]="";
s_a[1]=" Nicobar | North Middle Andaman | South Andaman";
s_a[2]=" Anantapur | Chittoor | East Godavari | Guntur | Kadapa | Krishna | Kurnool | Nellore | Prakasam | Srikakulam | Visakhapatnam | Vizianagaram | West Godavari ";
s_a[3]=" Anjaw | Siang | Changlang | Dibang Valley | East Kameng | East Siang | Kamle | Kra Daadi | Kurung Kumey | Lepa Rada  | Lohit | Longding | Lower Dibang Valley | Lower Siang | Lower Subansiri | Namsai |Pakke Kessang | Papum Pare | Shi Yomi | Tawang | Tirap | Upper Siang | Upper Subansiri |West Kameng | West Siang";
s_a[4]=" Bajali |Baksa|Barpeta|Biswanath|Bongaigaon|Cachar|Charaideo|Chirang|Darrang|Dhemaji|Dhubri|Dibrugarh|Goalpara|Golaghat|Hailakandi|Hojai|Jorhat|Kamrup|Kamrup Metropolitan|Karbi Anglong|Karimganj|Kokrajhar|Lakhimpur|Majuli| Morigaon| Nagaon | Nalbari | Sivasagar | Sonitpur | South Salmara-Mankachar | Tinsukia | Udalguri | West Karbi Anglong";
s_a[5]=" Araria|Arwal|Aurangabad|Banka|Begusarai|Bhagalpur|Bhojpur|Buxar|Darbhanga|East Champaran|Gaya|Gopalganj|Jamui|Jehanabad|Kaimur|Katihar|Khagaria|Kishanganj|Lakhisarai|Madhepura|Madhubani|Munger|Muzaffarpur|Nalanda|Nawada|Patna|Purnia|Rohtas|Saharsa|Samastipur|Saran|Sheikhpura|Sheohar|Sitamarhi|Siwan|Supaul|Vaishali|West Champaran";
s_a[6]=" Chandigarh ";
s_a[7]=" Balod|Baloda Bazar|Balrampur Ramanujganj|Bastar|Bemetara|Bijapur|Bilaspur|Dantewada|Dhamtari|Durg|Gariaband|Gaurela Pendra Marwahi|Janjgir Champa|Jashpur|Kabirdham|Kanker|Kondagaon|Korba|Koriya|Mahasamund|Mungeli|Narayanpur|Raigarh|Raipur|Rajnandgaon|Sukma|Surajpur|Surguja";
s_a[8]=" Dadra Nagar Haveli";
s_a[9]=" Daman|Diu ";
s_a[10]=" Central Delhi | East Delhi | New Delhi | North Delhi | North East Delhi | North West Delhi | South Delhi | South West Delhi | West Delhi ";
s_a[11]=" North Goa|South Goa";
s_a[12]=" Ahmedabad |Amreli|Anand|Aravalli|Banaskantha|Bharuch|Bhavnagar|Botad|Chhota Udaipur|Dahod|Dang|Devbhoomi DwarkaGandhinagar|Gir Somnath|Jamnagar|Junagadh|Kheda|Kutch|Mahisagar|Mehsana|Morbi|Narmada|Navsari|Panchmahal|Patan|Porbandar|Rajkot|Sabarkantha|Surat|Surendranagar|Tapi|Vadodara|Valsad";
s_a[13]=" Ambala|Bhiwani|Charkhi Dadri|Faridabad|Fatehabad|Gurugram |Hisar|Jhajjar|Jind|Kaithal|Karnal|Kurukshetra|Mahendragarh|Mewat|Palwal|Panchkula|Panipat|Rewari|Rohtak|Sirsa|Sonipat|Yamunanagar";
s_a[14]=" Bilaspur|Chamba|Hamirpur|Kangra|Kinnaur|Kullu|Lahaul Spiti|Mandi|Shimla|Sirmaur|Solan|Una";
s_a[15]=" Anantnag|Bandipora|Baramulla|Budgam|Doda|Ganderbal|Jammu|Kathua|Kishtwar|Kulgam|Kupwara|Poonch|Pulwama|Rajouri|Ramban|Reasi|Samba|hopian|Srinagar|Udhampur";
s_a[16]="Bokaro|Chatra|Deoghar|Dhanbad|Dumka|East Singhbhum|Garhwa|Giridih|Godda|Gumla|Hazaribagh|Jamtara|Khunti|Koderma|Latehar|Lohardaga|Pakur|Palamu|Ramgarh|Ranchi|Sahebganj|Seraikela Kharsawan|Simdega|West Singhbhum";
s_a[17]="Bagalkot|Bangalore Rural|Bangalore Urban|Belgaum|Bellary|Bidar|Chamarajanagar|Chikkaballapur|Chikkamagaluru|Chitradurga|Dakshina Kannada|avanagere|Dharwad|Gadag|Gulbarga |Hassan|Haveri|Kodagu|Kolar|Koppal|Mandya|Mysore|Raichur|Ramanagara|Shimoga|Tumkur|Udupi|Uttara Kannada|Vijayapura |Yadgir";
s_a[18]=" Alappuzha|Ernakulam|Idukki|Kannur|Kasaragod|Kollam|Kottayam|Kozhikode|Malappuram|Palakkad|Pathanamthitta|Thiruvananthapuram|Thrissur|Wayanad";
s_a[19]=" Lakshadweep";
s_a[20]="Agar Malwa|Alirajpur|Anuppur|Ashoknagar|Balaghat|Barwani|Betul|Bhind|Bhopal|Burhanpur|Chachaura|Chhatarpur|Chhindwara|Damoh|Datia|Dewas|Dhar|Dindori|una|Gwalior|Harda|Hoshangabad|Indore|Jabalpur|Jhabua|Katni|Khandwa|Khargone|Maihar|Mandla|Mandsaur|orena|Nagda|Narsinghpur|Neemuch|Niwari |anna|Raisen|Rajgarh|atlam|Rewa|Sagar|Satna|sehore|Seoni|Shahdol|Shajapur|Sheopur|Shivpuri|Sidhi|Singrauli|Tikamgarh|Ujjain|Umaria|Vidisha";
s_a[21]=" Ahmednagar|Akola|Amravati|Aurangabad|Beed|Bhandara|Buldhana|Chandrapur|Dhule|Gadchiroli|Gondia|HingoliJalgaon|Jalna|Kolhapur|Latur|Mumbai City|Mumbai Suburban|Nagpur|Nanded|Nandurbar|Nashik|Osmanabad|Palghar|Parbhani|Pune|Raigad|Ratnagiri|Sangli|Satara|Sindhudurg|Solapur|Thane|Wardha|Washim|Yavatmal";
s_a[22]="Bishnupur|Chandel|Churachandpur|Imphal East|Imphal West|Jiribam|Kakching|Kamjong|Kangpokpi|Noney|Pherzawl|Senapati|Tamenglong|Tengnoupal|Thoubal|Ukhrul";
s_a[23]="East Garo Hills|East Jaintia Hills|East Khasi Hills|North Garo Hills|Ri Bhoi|South Garo Hills|South West Garo Hills|South West Khasi Hills|West Garo Hills|West Jaintia Hills|West Khasi Hills";
s_a[24]="Aizawl|Champhai|Hnahthial|Khawzawl|Kolasib|LawngtlaiLunglei|Mamit|Saiha|Saitual|Serchhip";
s_a[25]="Mon|Dimapur|Kiphire|Kohima|Longleng|Mokokchung|Noklak|Peren|Phek|Tuensang|Wokha|Zunheboto";
s_a[26]="Angul|Balangir|Balasore|Bargarh|Bhadrak|Boudh|Cuttack|Debagarh|Dhenkanal|Gajapati|Ganjam|Jagatsinghpur|Jajpur|Jharsuguda|Kalahandi|Kandhamal|Kendrapara|Kendujhar|Khordha *|Koraput|Malkangiri|Mayurbhanj|Nabarangpur|Nayagarh|Nuapada|Puri|Rayagada|Sambalpur|Subarnapur|Sundergarh";
s_a[27]="Amritsar|Barnala|Bathinda|Faridkot|Fatehgarh Sahib|Fazilka|Firozpur|Gurdaspur|Hoshiarpur|Jalandhar|Kapurthala|Ludhiana|Mansa|Moga|Mohali|Muktsar|Pathankot|Patiala|Rupnagar|Sangrur|Shaheed Bhagat Singh Nagar|Tarn Taran";
s_a[28]=" Ajmer|Alwar|Banswara|Baran|Barmer|Bharatpur|Bhilwara|Bikaner|Bundi|Chittorgarh|Churu|Dausa|Dholpur|Dungarpur|Sri Ganganagar|Hanumangarh|Jaipur|Jaisalmer|Jalore|Jhalawar|Jhunjhunu|Jodhpur|Karauli|Kota|Nagaur|Pali|Pratapgarh|Rajsamand|Sawai Madhopur|Sikar|Sirohi|Tonk|Udaipur";
s_a[29]=" East Sikkim|North Sikkim|South Sikkim|West Sikkim ";
s_a[30]="Ariyalur|Chengalpattu *|Chennai|Coimbatore|Cuddalore|Dharmapuri|Dindigul|Erode|Kallakurichi *|Kanchipuram|Kanyakumari|Karur|Krishnagiri|Madurai|Mayiladuthurai*|Nagapattinam|Namakkal|Nilgiris|Perambalur|Pudukkottai|Ramanathapuram|Ranipet*|Salem|Sivaganga|Tenkasi *|Thanjavur|Theni|Thoothukudi|Tiruchirappalli|Tirunelveli|Tirupattur*|Tiruppur|Tiruvallur|Tiruvannamalai|Tiruvarur|Vellore|Viluppuram|Virudhunagar";
s_a[31]="Dhalai|Gomati|Khowai|North Tripura|Sepahijala|South Tripura|Unakoti|West Tripura";
s_a[32]=" Adilabad|Bhadradri Kothagudem|Hyderabad|Jagtial|Jangaon|Jayashankar Bhupalpally|Jogulamba Gadwal|Kamareddy|Karimnagar|Khammam|Komaram Bheem|Mahabubabad|Mahbubnagar|Mancherial|Medak|Medchal|Mulugu *|Nagarkurnool|Nalgonda|Narayanpet *|Nirmal|Nizamabad|Peddapalli|Rajanna Sircilla|Ranga Reddy|Sangareddy|Siddipet|Suryapet|Vikarabad|Wanaparthy|Warangal Rural|Warangal Urban|Yadadri Bhuvanagiri";
s_a[33]=" Agra|Aligarh|Prayagraj*|Ambedkar Nagar|Amethi *|Amroha *|Auraiya|Azamgarh|Baghpat|Bahraich|Ballia|Balrampur|Banda|Barabanki|Bareilly|Basti|Bhadohi|Bijnor|Budaun|Bulandshahr|Chandauli|Chitrakoot|Deoria|Etah|Etawah|Ayodhya *|Farrukhabad|Fatehpur|Firozabad|Gautam Buddha Nagar|Ghaziabad|Ghazipur|Gonda|Gorakhpur|Hamirpur|Hapur *|Hardoi|Hathras *|Jalaun|Jaunpur|Jhansi|Kannauj|Kanpur Dehat *|Kanpur Nagar|Kasganj *|Kaushambi|Kheri|Kushinagar|Lalitpur|Lucknow|Maharajganj|Mahoba|Mainpuri|Mathura|Mau|Meerut|Mirzapur|Moradabad|MuzaffarnagarPilibhit|Pratapgarh|Raebareli|Rampur|Saharanpur|Sambhal *|Sant Kabir Nagar|ShahjahanpurShamli *|Shravasti|Siddharthnagar|Sitapur|Sonbhadra|Sultanpur|Unnao|Varanasi ";
s_a[34]="Almora|Bageshwar|Chamoli|Champawat|Dehradun|Haridwar|Nainital|Pauri|Pithoragarh|Rudraprayag|Tehri|Udham Singh Nagar|Uttarkashi";
s_a[35]=" Alipurduar|Bankura|Birbhum|Cooch Behar|Dakshin Dinajpur|Darjeeling|Hooghly|Howrah|Jalpaiguri|Jhargram|Kalimpong|Kolkata|Malda|Murshidabad|Nadia|North 24 Parganas|Paschim Bardhaman|Paschim Medinipur|Purba Bardhaman|Purba Medinipur|Purulia|South 24 Parganas|Uttar Dinajpur";
function print_state(state_id){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var option_str = document.getElementById(state_id);
	option_str.length=0;
	option_str.options[0] = new Option('Select State','');
	option_str.selectedIndex = 0;
	for (var i=0; i<state_arr.length; i++) {
		option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
	}
}

function print_city(city_id, city_index){
	var option_str = document.getElementById(city_id);
	option_str.length=0;	// Fixed by Julian Woods
	option_str.options[0] = new Option('Select District','');
	option_str.selectedIndex = 0;
	var city_arr = s_a[city_index].split("|");
	for (var i=0; i<city_arr.length; i++) {
		option_str.options[option_str.length] = new Option(city_arr[i],city_arr[i]);
	}
}
