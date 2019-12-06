

function fillCategory(){ 
 // this function is used to fill the category list on load
addOption(document.drop_list.Category, "Home mantainance", "Home mantainance", "");
addOption(document.drop_list.Category, "Home appliance repair", "Home appliance repair", "");
addOption(document.drop_list.Category, "Beauty Service", "Beauty Service", "");
addOption(document.drop_list.Category, "Laundry Service", "Laundry Service", "");
addOption(document.drop_list.Category, "Business Service", "Business Service", "");
addOption(document.drop_list.Category, "Events and Parties", "Events and Parties", "");
addOption(document.drop_list.Category, "Cleaning Service", "Cleaning and Service", "");
addOption(document.drop_list.Category, "Electronics repair", "Electronics repair", "");
addOption(document.drop_list.Category, "Delivery Service", "Delivery Service", "");
addOption(document.drop_list.Category, "Technology Service", "Technology Service", "");
addOption(document.drop_list.Category, "Health and fitness Service", "Health and fitness Service", "");
}

function SelectSubCat(){
// ON selection of category this function will work

removeAllOptions(document.drop_list.SubCat);
addOption(document.drop_list.SubCat, "", "SubCat", "");

if(document.drop_list.Category.value == 'Home mantainance'){
addOption(document.drop_list.SubCat,"AC Service", "AC Service");
addOption(document.drop_list.SubCat,"Electrician", "Electrician");
addOption(document.drop_list.SubCat,"Plumber", "Plumber");
addOption(document.drop_list.SubCat,"Pest control", "Pest control");
addOption(document.drop_list.SubCat,"Painter", "Painter");
}
if(document.drop_list.Category.value == 'Home appliance repair'){
addOption(document.drop_list.SubCat,"Air condition", "Air condition");
addOption(document.drop_list.SubCat,"Fridge", "Fridge");
addOption(document.drop_list.SubCat,"Television", "Television", "");
addOption(document.drop_list.SubCat,"Washing machine", "Washing machine");
addOption(document.drop_list.SubCat,"Microwave oven", "Microwave oven");
addOption(document.drop_list.SubCat,"Gas stove", "Gas stove", "");
}
if(document.drop_list.Category.value == 'Beauty Service'){
addOption(document.drop_list.SubCat,"Hair cut", "Hair cut");
addOption(document.drop_list.SubCat,"Hair straightening", "Hair straightening");
addOption(document.drop_list.SubCat,"Mehndi", "Mehndi");
addOption(document.drop_list.SubCat,"kertain treatment", "kertain treatment");
addOption(document.drop_list.SubCat,"Bridal makeup artist", "Bridal makeup artist");
addOption(document.drop_list.SubCat,"Hair coloring", "Hair coloring");
}
if(document.drop_list.Category.value == 'Laundry Service'){
addOption(document.drop_list.SubCat,"Accessories Cleaning", "Accessories Cleaning");
addOption(document.drop_list.SubCat,"Wash and fold", "Wash and fold");
addOption(document.drop_list.SubCat,"Shoe Laundry", "Shoe Laundry");
addOption(document.drop_list.SubCat,"Steam iron", "Steam iron");
addOption(document.drop_list.SubCat,"Wash and iron", "Wash and iron");
addOption(document.drop_list.SubCat,"Dry Cleaning", "Dry Cleaning");
addOption(document.drop_list.SubCat,"Carpet wash", "Carpet wash");
addOption(document.drop_list.SubCat,"Curtain wash", "Curtain wash");
}
if(document.drop_list.Category.value == 'Bussiness Service'){
addOption(document.drop_list.SubCat,"Insurance Service", "Insurance Service");
addOption(document.drop_list.SubCat,"Bussiness Setup", "Bussiness Setup");
addOption(document.drop_list.SubCat,"Gst registration", "Gst registration");
addOption(document.drop_list.SubCat,"Trade mark", "Trade mark");
addOption(document.drop_list.SubCat,"Ca Service", "Ca Service");
addOption(document.drop_list.SubCat,"Lawyer", "Lawyer");
addOption(document.drop_list.SubCat,"Detective Agency", "Detective Agency");
addOption(document.drop_list.SubCat,"Background Verification", "Background Verification");
addOption(document.drop_list.SubCat,"Accounting Service", "Accounting Service");
}
if(document.drop_list.Category.value == 'Events and Parties'){
addOption(document.drop_list.SubCat,"After party Cleaning", "After party Cleaning");
addOption(document.drop_list.SubCat,"Events photo shoot", "Events photo shoot");
addOption(document.drop_list.SubCat,"Occasion cakes", "Occasion cakes");
addOption(document.drop_list.SubCat,"Surprise Gift", "Surprise Gift");
addOption(document.drop_list.SubCat,"Bridal Bouquets", "Bridal Bouquets");
addOption(document.drop_list.SubCat,"Car decoration", "Car decoration");
addOption(document.drop_list.SubCat,"Stage decoration", "Stage decoration");
addOption(document.drop_list.SubCat,"Flower arragement", "Flower arragement");
addOption(document.drop_list.SubCat,"Occasional Bouquets", "Occasional Bouquets");
addOption(document.drop_list.SubCat,"Flower Basket", "Flower Basket");
addOption(document.drop_list.SubCat,"Events", "Events");
addOption(document.drop_list.SubCat,"Emcfe", "Emcfe");
}
if(document.drop_list.Category.value == 'Cleaning Service'){
addOption(document.drop_list.SubCat,"Chair Cleaning", "Chair Cleaning");
addOption(document.drop_list.SubCat,"Regular Cleaning", "Regular Cleaning");
addOption(document.drop_list.SubCat,"Car wash", "Car wash");
addOption(document.drop_list.SubCat,"Sofa Cleaning", "Sofa Cleaning");
addOption(document.drop_list.SubCat,"Curtain Cleaning", "Curtain Cleaning");
addOption(document.drop_list.SubCat,"Basic Cleaning", "Basic Cleaning");
addOption(document.drop_list.SubCat,"Deep Cleaning", "Deep Cleaning");
addOption(document.drop_list.SubCat,"Car dry Cleaning", "car dry Cleaning");
}
if(document.drop_list.Category.value == 'Electronics repair'){
addOption(document.drop_list.SubCat,"painter repair", "painter repair");
addOption(document.drop_list.SubCat,"Events photo shoot", "Events photo shoot");
addOption(document.drop_list.SubCat,"Mobile repair", "Mobile repair");
addOption(document.drop_list.SubCat,"Laptop repair", "Laptop repair");
addOption(document.drop_list.SubCat,"Tablet repair ", "Tablet repair");
addOption(document.drop_list.SubCat,"Desktop repair", "Desktop repair");
addOption(document.drop_list.SubCat,"Cctv", "Cctv");

}
if(document.drop_list.Category.value == 'Delivery Service'){
addOption(document.drop_list.SubCat,"Xams tree", "Xams tree");
addOption(document.drop_list.SubCat,"Driver", "Driver");
addOption(document.drop_list.SubCat,"Cake Delivery", "Cake Delivery");
addOption(document.drop_list.SubCat,"Packers & movers", "Packers & movers");
addOption(document.drop_list.SubCat,"Bouquet Delivery ", "Bouquet Delivery");
addOption(document.drop_list.SubCat,"Surprise gift", "Surprise Gift");
}
if(document.drop_list.Category.value == 'Technology Service'){
addOption(document.drop_list.SubCat,"Mobile app", "Mobile app");
addOption(document.drop_list.SubCat,"Web app", "Web app");
addOption(document.drop_list.SubCat,"Domain hosting", "Domain hosting");
addOption(document.drop_list.SubCat,"Server mgmt", "Server mgmt");
addOption(document.drop_list.SubCat,"Digital marketing", "Digital marketing");
addOption(document.drop_list.SubCat,"Web designing", "Web designing");
}
if(document.drop_list.Category.value == 'Health and fitness Service'){
addOption(document.drop_list.SubCat,"Fitness trainer", "Fitness trainer");
addOption(document.drop_list.SubCat,"Yoga trainer", "Yoga trainer");
addOption(document.drop_list.SubCat,"Doctor at home", "Doctor at home");
addOption(document.drop_list.SubCat,"parental care", "parental care");



////////////////// 

function removeAllOptions(selectbox)
{
	var i;
	for(i=selectbox.options.length-1;i>=0;i--)
	{
		//selectbox.options.remove(i);
		selectbox.remove(i);
	}
}


function addOption(selectbox, value, text )
{
	var optn = document.createElement("OPTION");
	optn.text = text;
	optn.value = value;

	selectbox.options.add(optn);
}