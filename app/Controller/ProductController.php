<?php



/**

 * Description of ProductController

 * @author : Trung Tong

 * @since Oct 19, 2012

 */

class ProductController extends AppController {
    public $name = 'Product';
    public $uses = array('Catproduct', 'Product','Hang',);

    public function danhmucsanpham($slug) {
        $typeName = $this->Catproduct->find('first', array(
                'conditions' => array('alias' => $slug)
            ));
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,
                'Product.cat_id' => $typeName['Catproduct']["id"]

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '60'

        );
        $this->Catproduct->id = $typeName['Catproduct']["id"];

        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

    }
    
    public function thietkelogoo($id=274) {
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
                'Product.cat_id' => 274
            ),
            'order' => 'Product.id DESC, Product.modified DESC',
            'limit' => '80'
        );
        $this->Catproduct->id = $id;
        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);
        $listProduct = $this->paginate('Product');
        $this->set('listProduct', $listProduct);
    }

     public function thietkelogonew($id=274) {
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
                'Product.cat_id' => 274
            ),
            'order' => 'Product.id DESC, Product.modified DESC',
            'limit' => '80'
        );
        $this->Catproduct->id = $id;
        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);
        $listProduct = $this->paginate('Product');
        $this->set('listProduct', $listProduct);
    }

    public function thietkeprofile($id=754) {
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
                'Product.cat_id' => 754
            ),
            'order' => 'Product.id DESC, Product.modified DESC',
            'limit' => '80'
        );
        $this->Catproduct->id = $id;
        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);
        $listProduct = $this->paginate('Product');
        $this->set('listProduct', $listProduct);
    }

    public function nhandienthuonghieu($id=275) {
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,
                'Product.cat_id' => 275

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '60'

        );
        $this->Catproduct->id = $id;

        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

    }

    public function thietkebaobi($id=276) {
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,
                'Product.cat_id' => 276

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '60'

        );
        $this->Catproduct->id = $id;

        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

    }

    public function demo01(){
        
    }
    public function demo02(){
        
    }
    public function demo04(){
        
    }

    public function baobichanhmuoi(){
        $this->set('title_for_layout',"Bao bì nước giải khát chanh muối");
        $this->set('keywords_for_layout', "Bao bì nước giải khát chanh muối");
        $this->set('description_for_layout', "Bao bì nước giải khát chanh muối");
    }
    public function baobikemtrangtien(){
        $this->set('title_for_layout',"Thiết kế bao bì Kem Tràng Tiền");
        $this->set('keywords_for_layout', "Thiết kế bao bì Kem Tràng Tiền");
        $this->set('description_for_layout', "Thiết kế bao bì Kem Tràng Tiền");
    }
    public function banhngotkbell(){
        $this->set('title_for_layout',"Thiết kế bao bì Bánh ngọt K'Bell");
        $this->set('keywords_for_layout', "Thiết kế bao bì Bánh ngọt K'Bell");
        $this->set('description_for_layout', "Thiết kế bao bì Bánh ngọt K'Bell");
    }

    public function baobigoldhead(){
        $this->set('title_for_layout',"Thiết kế bao bì sữa hộp GoldHeat");
        $this->set('keywords_for_layout', "Thiết kế bao bì sữa hộp GoldHeat");
        $this->set('description_for_layout', "Thiết kế bao bì sữa hộp GoldHeat");
    }
     public function nuoctangluckbell(){
        $this->set('title_for_layout',"Thiết kế bao bì nước tăng lực K'Bell");
        $this->set('keywords_for_layout', "Thiết kế bao bì nước tăng lực K'Bell");
        $this->set('description_for_layout', "Thiết kế bao bì nước tăng lực K'Bell");
    }
    public function cafemodano(){
        $this->set('title_for_layout',"Thiết kế bao bì Cafe Modano");
        $this->set('keywords_for_layout', "Thiết kế bao bì Cafe Modano");
        $this->set('description_for_layout', "Thiết kế bao bì Cafe Modano");
    }

    public function baobibeerhalong(){
        $this->set('title_for_layout',"Thiết kế bao bì Beer Hạ Long");
        $this->set('keywords_for_layout', "Thiết kế bao bì Beer Hạ Long");
        $this->set('description_for_layout', "Thiết kế bao bì Beer Hạ Long");
    }

    public function baobihaithinh(){
        $this->set('title_for_layout',"Thiết kế bao bì nước mắm Hải Thịnh");
        $this->set('keywords_for_layout', "Thiết kế bao bì nước mắm Hải Thịnh");
        $this->set('description_for_layout', "Thiết kế bao bì nước mắm Hải Thịnh");
    }
    public function tinhdaudatviet(){
        $this->set('title_for_layout',"Thiết kế bao bì tinh dầu Đất Việt");
        $this->set('keywords_for_layout', "Thiết kế bao bì tinh dầu Đất Việt");
        $this->set('description_for_layout', "Thiết kế bao bì tinh dầu Đất Việt");
    }

    public function tinhdaudonavi(){
        $this->set('title_for_layout',"Thiết kế bao bì tinh dầu Donavi");
        $this->set('keywords_for_layout', "Thiết kế bao bì tinh dầu Donavi");
        $this->set('description_for_layout', "Thiết kế bao bì tinh dầu Donavi");
    }
    public function thietkelogofb(){
        $this->set('title_for_layout',"Thiết kế logo F&B");
        $this->set('keywords_for_layout', "Thiết kế logo F&B");
        $this->set('description_for_layout', "Thiết kế logo F&B");
    }

    public function thietkelogohaithinh(){
        $this->set('title_for_layout',"Thiết kế logo Hải Thịnh Cà Ná");
        $this->set('keywords_for_layout', "Thiết kế logo Hải Thịnh Cà Ná");
        $this->set('description_for_layout', "Thiết kế logo Hải Thịnh Cà Ná");
    }
    public function thietkelogoakka(){
        $this->set('title_for_layout',"Thiết kế logo AKKA");
        $this->set('keywords_for_layout', "Thiết kế logo AKKA");
        $this->set('description_for_layout', "Thiết kế logo AKKA");
    }
    public function thietkelogoklb(){
        $this->set('title_for_layout',"Thiết kế logo bất động sản KLB");
        $this->set('keywords_for_layout', "Thiết kế logo bất động sản KLB");
        $this->set('description_for_layout', "Thiết kế logo bất động sản KLB");
    }
    public function thietkelogoparpa(){
        $this->set('title_for_layout',"Thiết kế logo thể thao Parpa");
        $this->set('keywords_for_layout', "Thiết kế logo thể thao Parpa");
        $this->set('description_for_layout', "Thiết kế logo thể thao Parpa");
    }
    public function thietkelogovpic(){
        $this->set('title_for_layout',"Thiết kế logo Vpic");
        $this->set('keywords_for_layout', "Thiết kế logo Vpic");
        $this->set('description_for_layout', "Thiết kế logo Vpic");
    }
    public function thietkelogojajon(){
        $this->set('title_for_layout',"Thiết kế logo bánh mì Ja & Jon");
        $this->set('keywords_for_layout', "Thiết kế logo bánh mì Ja & Jon");
        $this->set('description_for_layout', "Thiết kế logo bánh mì Ja & Jon");
    }
    public function logogiaan(){
        $this->set('title_for_layout',"Thiết kế logo Gia An");
        $this->set('keywords_for_layout', "Thiết kế logo Gia An");
        $this->set('description_for_layout', "Thiết kế logo Gia An");
    }
    public function logogreenocean(){
        $this->set('title_for_layout',"Thiết kế logo Green Ocean");
        $this->set('keywords_for_layout', "Thiết kế logo Green Ocean");
        $this->set('description_for_layout', "Thiết kế logo Green Ocean");
    }
    public function logohungthinhphat(){
        $this->set('title_for_layout',"Thiết kế logo Hưng Thịnh Phát Bio");
        $this->set('keywords_for_layout', "Thiết kế logo Hưng Thịnh Phát Bio");
        $this->set('description_for_layout', "Thiết kế logo Hưng Thịnh Phát Bio");
    }
    public function logominhphat(){
        $this->set('title_for_layout',"Thiết kế logo Minh Phát");
        $this->set('keywords_for_layout', "Thiết kế logo Minh Phát");
        $this->set('description_for_layout', "Thiết kế logo Minh Phát");
    }
    public function logobaria(){
        $this->set('title_for_layout',"Thiết kế logo Baria Chocolate");
        $this->set('keywords_for_layout', "Thiết kế logo Baria Chocolate");
        $this->set('description_for_layout', "Thiết kế logo Baria Chocolate");
    }
    public function logositon(){
        $this->set('title_for_layout',"Thiết kế logo Công ty Gạch men sứ Siton");
        $this->set('keywords_for_layout', "Thiết kế logo Công ty Gạch men sứ Siton");
        $this->set('description_for_layout', "Thiết kế logo Công ty Gạch men sứ Siton");
    }
    public function logodulichsaigon(){
        $this->set('title_for_layout',"Thiết kế logo Trường Đại học Du lịch Sài Gòn");
        $this->set('keywords_for_layout', "Thiết kế logo Trường Đại học Du lịch Sài Gòn");
        $this->set('description_for_layout', "Thiết kế logo Trường Đại học Du lịch Sài Gòn");
    }
    public function logoenroses(){
        $this->set('title_for_layout',"Thiết kế logo EnRoses");
        $this->set('keywords_for_layout', "Thiết kế logo EnRoses");
        $this->set('description_for_layout', "Thiết kế logo EnRoses");
    }
    public function logoductoan(){
        $this->set('title_for_layout',"Thiết kế logo Đức Toàn");
        $this->set('keywords_for_layout', "Thiết kế logo Đức Toàn");
        $this->set('description_for_layout', "Thiết kế logo Đức Toàn");
    }
    public function logohamzaa(){
        $this->set('title_for_layout',"Thiết kế logo Hamzaa");
        $this->set('keywords_for_layout', "Thiết kế logo Hamzaa");
        $this->set('description_for_layout', "Thiết kế logo Hamzaa");
    }
    public function logolamviet(){
        $this->set('title_for_layout',"Thiết kế logo Lâm Việt");
        $this->set('keywords_for_layout', "Thiết kế logo Lâm Việt");
        $this->set('description_for_layout', "Thiết kế logo Lâm Việt");
    }
    public function logotmi(){
        $this->set('title_for_layout',"Thiết kế logo TMI");
        $this->set('keywords_for_layout', "Thiết kế logo TMI");
        $this->set('description_for_layout', "Thiết kế logo TMI");
    }

    public function logowinsea(){
        $this->set('title_for_layout',"Thiết kế logo Winsea Tech");
        $this->set('keywords_for_layout', "Thiết kế logo Winsea Tech");
        $this->set('description_for_layout', "Thiết kế logo Winsea Tech");
    }


    public function logojawoco(){
        $this->set('title_for_layout',"Thiết kế logo Jawoco");
        $this->set('keywords_for_layout', "Thiết kế logo Jawoco");
        $this->set('description_for_layout', "Thiết kế logo Jawoco");
    }

    public function thietkelogosendo(){
        $this->set('title_for_layout',"Thiết kế logo Sendo");
        $this->set('keywords_for_layout', "Thiết kế logo Sendo");
        $this->set('description_for_layout', "Thiết kế logo Sendo");
    }

    public function thietkelogovamos(){
        $this->set('title_for_layout',"Thiết kế logo cafe Vamos");
        $this->set('keywords_for_layout', "Thiết kế logo cafe Vamos");
        $this->set('description_for_layout', "Thiết kế logo cafe Vamos");
    }

    public function thietkelogodhaudio(){
        $this->set('title_for_layout',"Thiết kế logo DH Audio");
        $this->set('keywords_for_layout', "Thiết kế logo DH Audio");
        $this->set('description_for_layout', "Thiết kế logo DH Audio");
    }

    public function thietkelogoglotek(){
        $this->set('title_for_layout',"Logo công ty thiết bị công nghiệp Glotek");
        $this->set('keywords_for_layout', "Logo công ty thiết bị công nghiệp Glotek");
        $this->set('description_for_layout', "Logo công ty thiết bị công nghiệp Glotek");
    }

    public function thietkelogonat(){
        $this->set('title_for_layout',"Logo nhà hàng Cao Bằng Nat");
        $this->set('keywords_for_layout', "Logo nhà hàng Cao Bằng Nat");
        $this->set('description_for_layout', "Logo nhà hàng Cao Bằng Nat");
    }

    public function thietkelogohungcuong(){
        $this->set('title_for_layout',"Thiết kế logo nha khoa Hùng Cường");
        $this->set('keywords_for_layout', "Thiết kế logo nha khoa Hùng Cường");
        $this->set('description_for_layout', "Thiết kế logo nha khoa Hùng Cường");
    }

    public function websiteamitea(){
        $this->set('title_for_layout',"Thiết kế website Amitea");
        $this->set('keywords_for_layout', "Thiết kế website Amitea");
        $this->set('description_for_layout', "Thiết kế website Amitea");
    }
    public function websiteartex(){
        $this->set('title_for_layout',"Website công ty xuất nhập khẩu Artex Thăng Long");
        $this->set('keywords_for_layout', "Website công ty xuất nhập khẩu Artex Thăng Long");
        $this->set('description_for_layout', "Website công ty xuất nhập khẩu Artex Thăng Long");
    }
    public function websiteindeco(){
        $this->set('title_for_layout',"Thiết kế website Indeco");
        $this->set('keywords_for_layout', "Thiết kế website Indeco");
        $this->set('description_for_layout', "Thiết kế website Indeco");
    }
    public function websiteliendaivien(){
        $this->set('title_for_layout',"Thiết kế website công viên nghĩa trang Liên Đài Viên");
        $this->set('keywords_for_layout', "Thiết kế website công viên nghĩa trang Liên Đài Viên");
        $this->set('description_for_layout', "Thiết kế website công viên nghĩa trang Liên Đài Viên");
    }

    public function websitelongson(){
        $this->set('title_for_layout',"Thiết kế website Long Sơn");
        $this->set('keywords_for_layout', "Thiết kế website Long Sơn");
        $this->set('description_for_layout', "Thiết kế website Long Sơn");
    }

    public function websiteroxa(){
        $this->set('title_for_layout',"Thiết kế website Roxa Beer");
        $this->set('keywords_for_layout', "Thiết kế website Roxa Beer");
        $this->set('description_for_layout', "Thiết kế website Roxa Beer");
    }

    public function websitettgroup(){
        $this->set('title_for_layout',"Website tập đoàn T&T Group");
        $this->set('keywords_for_layout', "Website tập đoàn T&T Group");
        $this->set('description_for_layout', "Website tập đoàn T&T Group");
    }
    public function websitetinnghia(){
        $this->set('title_for_layout',"Thiết kế website xây dựng Tín Nghĩa");
        $this->set('keywords_for_layout', "Thiết kế website xây dựng Tín Nghĩa");
        $this->set('description_for_layout', "Thiết kế website xây dựng Tín Nghĩa");
    }

    public function websitesiton(){
        $this->set('title_for_layout',"Thiết kế website gạch men sứ Thanh Hải");
        $this->set('keywords_for_layout', "Thiết kế website gạch men sứ Thanh Hải");
        $this->set('description_for_layout', "Thiết kế website gạch men sứ Thanh Hải");
    }

    public function websiteaqua(){
        $this->set('title_for_layout',"Thiết kế website Aquamedia Span");
        $this->set('keywords_for_layout', "Thiết kế website Aquamedia Span");
        $this->set('description_for_layout', "Thiết kế website Aquamedia Span");
    }

    public function websitelalisse(){
        $this->set('title_for_layout',"Thiết kế website thực phẩm chức năng Lalisse");
        $this->set('keywords_for_layout', "Thiết kế website thực phẩm chức năng Lalisse");
        $this->set('description_for_layout', "Thiết kế website thực phẩm chức năng Lalisse");
    }

    public function websitesmardoor(){
        $this->set('title_for_layout',"Thiết kế website Smart Door");
        $this->set('keywords_for_layout', "Thiết kế website Smart Door");
        $this->set('description_for_layout', "Thiết kế website Smart Door");
    }

    public function websitesumi(){
        $this->set('title_for_layout',"Thiết kế website Sumi");
        $this->set('keywords_for_layout', "Thiết kế website Sumi");
        $this->set('description_for_layout', "Thiết kế website Sumi");
    }

    public function bonhandienthuonghieu($id=275){
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
                'Product.cat_id' => $id
            ),
            'order' => 'Product.id DESC, Product.modified DESC',
            'limit' => '80'
        );
        $this->Catproduct->id = $id;
        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);
        $listProduct = $this->paginate('Product');
        $this->set('listProduct', $listProduct);
    }
    

    public function thietkebienquangcao($id=285) {
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,
                'Product.cat_id' => 285

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '60'

        );
        $this->Catproduct->id = $id;

        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

    }

    public function thietketoroitogap($id=286) {
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,
                'Product.cat_id' => 286

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '60'

        );
        $this->Catproduct->id = $id;

        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

    }

    public function thietketogap($id=286) {
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,
                'Product.cat_id' => 286

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '60'

        );
        $this->Catproduct->id = $id;

        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

    }

    public function thietkehosonangluc($id=279) {
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,
                'Product.cat_id' => 279

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '60'

        );
        $this->Catproduct->id = $id;

        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

    }

    public function thietkebrochure($id=280) {
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,
                'Product.cat_id' => 280

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '60'

        );
        $this->Catproduct->id = $id;

        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

    }

    public function thietkecatalogue($id=288) {
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,
                'Product.cat_id' => 288

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '60'

        );
        $this->Catproduct->id = $id;

        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

    }

    public function thietkelichtet($id=282) {
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,
                'Product.cat_id' => 282

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '60'

        );
        $this->Catproduct->id = $id;

        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

    }

    public function thietkekyyeu($id=289) {
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,
                'Product.cat_id' => 289

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '60'

        );
        $this->Catproduct->id = $id;

        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

    }

    public function thietkebaocao($id=290) {
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,
                'Product.cat_id' => 290

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '60'

        );
        $this->Catproduct->id = $id;

        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

    }

    public function thietkewebsite($id=283) {
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,
                'Product.cat_id' => 283

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '60'

        );
        $this->Catproduct->id = $id;

        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

    }

    public function thietkenoithat($id=284) {
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,
                'Product.cat_id' => 284

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '60'

        );
        $this->Catproduct->id = $id;

        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

    }

    public function thietkeposter($id=287) {
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,
                'Product.cat_id' => 287

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '60'

        );
        $this->Catproduct->id = $id;

        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);
    }

    public function thietkebanner($id=287) {
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,
                'Product.cat_id' => 287

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '60'

        );
        $this->Catproduct->id = $id;

        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);
    }
    
    public function dattenthuonghieu($id=291) {

        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,
                'Product.cat_id' => 291

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '60'

        );
        $this->Catproduct->id = $id;

        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

    }

    public function sangtacsologan($id=292) {
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,
                'Product.cat_id' => 292

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '60'

        );
        $this->Catproduct->id = $id;

        $this->Catproduct->saveField('shortdes_eg', $typeName['Catproduct']['shortdes_eg'] + 1);

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

    }

public function index1($id = null) {
		$typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout','Sản phẩm thiết kế');
		$this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
		//view all
		$this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
			//	'Product.cat_id' => 274,
            ),
            'order' => 'Product.id DESC, Product.modified DESC',
            'limit' => '1000'
        );
        
        $listProduct = $this->paginate('Product');
        $this->set('listProduct', $listProduct);
			//thiết kế logo
		$this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
				'Product.cat_id' => 274,
            ),
            'order' => 'Product.id DESC, Product.modified DESC',
           'limit' => '60'
        );
        
        $listProduct1 = $this->paginate('Product');
        $this->set('listProduct1', $listProduct1);
		//Nhận diện thương hiệu 
		$this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
				'Product.cat_id' => 275,
            ),
            'order' => 'Product.id DESC, Product.modified DESC',
            'limit' => '60'
        );
        $listProduct12 = $this->paginate('Product');
        $this->set('listProduct12', $listProduct12);
			//thiết kế logo
		$this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
				'Product.cat_id' => 274,
                'Product.pos' => 4,
            ),
            'order' => 'Product.id DESC, Product.modified DESC',
            'limit' => '60'
        );
        $listProduct2 = $this->paginate('Product');
        $this->set('listProduct2', $listProduct2);
		//Thiết kế bao bì
		$this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
				'Product.cat_id' => 276,
            ),
            'order' => 'Product.id DESC, Product.modified DESC',
            'limit' => '60'
        );
        
        $listProduct3 = $this->paginate('Product');
        $this->set('listProduct3', $listProduct3);
		//Thiết kế biển quảng cáo 
		$this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
				'Product.cat_id' => 285,
            ),
            'order' => 'Product.id DESC, Product.modified DESC',
            'limit' => '60'
        );
        $listProduct4 = $this->paginate('Product');
        $this->set('listProduct4', $listProduct4);
		//Thiết kế tờ rơi, tờ gấp 
		$this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
				'Product.cat_id' => 286,
            ),
            'order' => 'Product.id DESC, Product.modified DESC',
            'limit' => '60'
        );
        $listProduct5 = $this->paginate('Product');
        $this->set('listProduct5', $listProduct5);
		//Thiết kế Hồ sơ năng lực 
		$this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
				'Product.cat_id' => 279,
            ),
            'order' => 'Product.id DESC, Product.modified DESC',
            'limit' => '60'
        );
        $listProduct6 = $this->paginate('Product');
        $this->set('listProduct6', $listProduct6);
		//Thiết kế Brochure, Catalog 
		$this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
				'Product.cat_id' => 280,
            ),
            'order' => 'Product.id DESC, Product.modified DESC',
            'limit' => '60'
        );
        $listProduct7 = $this->paginate('Product');
        $this->set('listProduct7', $listProduct7);
		//Thiết kế và in ấn lịch tết 
		$this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
				'Product.cat_id' => 282,
            ),
            'order' => 'Product.id DESC, Product.modified DESC',
            'limit' => '60'
        );
        $listProduct8 = $this->paginate('Product');
        $this->set('listProduct8', $listProduct8);
		//Thiết kế website 
		$this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
				'Product.cat_id' => 283,
            ),
            'order' => 'Product.id DESC, Product.modified DESC',
            'limit' => '60'
        );
        $listProduct9 = $this->paginate('Product');
        $this->set('listProduct9', $listProduct9);
		//Thiết kế và in ấn bao bì sản phẩm
		$this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
				'Product.cat_id' => 284,
            ),
            'order' => 'Product.id DESC, Product.modified DESC',
           'limit' => '60'
        );
        $listProduct10 = $this->paginate('Product');
        $this->set('listProduct10', $listProduct10);
		//Thiết kế và in ấn lịch tết
		$this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
				'Product.cat_id' => 287,
            ),
            'order' => 'Product.id DESC, Product.modified DESC',
            'limit' => '60'
        );
        $listProduct11 = $this->paginate('Product');
        $this->set('listProduct11', $listProduct11);
		//Thiết kế website
		$this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
				'Product.cat_id' => 287,
            ),
            'order' => 'Product.id DESC, Product.modified DESC',
            'limit' => '60'
        );
       
}


 public function index($id = null) {

        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
		
		$parmenu = $this->Catproduct->find('list', array(
            'conditions' => array(
                'Catproduct.parent_id' => $id,
                'Catproduct.status' => 1
            )
                ));
		
		$mang=array();$i=0;
		$mang[$i++]=$id;
		foreach($parmenu as $key=>$value){
		$mang[$i++]=$key;
		}

		if($id!=null) {

        // list all product

        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,

                'Product.cat_id' => $mang

            ),

            'order' => 'Product.id DESC, Product.modified DESC',
			'limit'=>16

    

        );

		

		}

		else {

		       $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,

                

            ),

            'order' => 'Product.pos DESC, Product.modified DESC',
        'limit'=>16
     

        );
		}

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

		$this->Session->write('url','san-pham');
    }

    public function rss($id = null) {

        $typeName = $this->Catproduct->read(null, $id);
        $this->set('title_for_layout',$typeName['Catproduct']["name"]);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);
		
		$parmenu = $this->Catproduct->find('list', array(
            'conditions' => array(
                'Catproduct.parent_id' => $id,
                'Catproduct.status' => 1
            )
                ));
		
		$mang=array();$i=0;
		$mang[$i++]=$id;
		foreach($parmenu as $key=>$value){
		$mang[$i++]=$key;
		}

		if($id!=null) {

        // list all product

        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,

                'Product.cat_id' => $mang

            ),

            'order' => 'Product.id DESC, Product.modified DESC',
			'limit'=>16

    

        );

		

		}

		else {

		       $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,

                

            ),

            'order' => 'Product.pos DESC, Product.modified DESC',
'limit'=>16
     

        );

		

		}

		

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

		$this->Session->write('url','san-pham');

		

    }


    public function detail($id = null) {
        $detailNews = $this->Product->findById($id);
        $this->set('detailNews', $detailNews);
        $this->set('title_for_layout',$detailNews['Product']['name']);
        $this->set('keywords_for_layout', $detailNews['Product']['meta_key']);
        $this->set('description_for_layout', $detailNews['Product']['meta_des']);
        $this->set('cat_id', $detailNews['Product']['cat_id']);
		$typeName = $this->Catproduct->read(null, $detailNews['Product']['cat_id']);
		$this->set('typeName', $typeName);
		  // list all product
        $this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
                'Product.cat_id' => $detailNews['Product']['cat_id'],
				'Product.id <>' => $id,
            ),
            'order' => 'RAND()',
            'limit' => '6'
        );
        $this->Product->id = $detailNews['Product']['id'];
        if($this->Product->id)
        {
           $this->Product->saveField('view', $detailNews['Product']['view'] + 1 );
        }
        $listProduct = $this->paginate('Product');
        $this->set('listProduct', $listProduct);
		$this->Session->write('url','chi-tiet-san-pham/'.$id.$detailNews['Product']['slug'].'.html');
    }



    public function listproduct() {

        // list all product

        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '6'

        );

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

    }
    
public function index274() {
        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,
                 'Product.cat_id' => 274

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '6'

        );

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);
       
    }

function getproduct($cat_id=null) {
       $cat= $this->Product->find('all', array('conditions' => array('Product.status' => 1, 'Product.cat_id' => $cat_id)));
       $this->set('cat',$cat);
       
    }
 public function multiMenuProduct($parentid = null, $trees = NULL) {
        $parmenu = $this->Catproduct->find('all', array(
            'conditions' => array(
                'Catproduct.parent_id' => $parentid,
                'Catproduct.status' => 1
            )
                ));
        if (count($parmenu) > 0) {
            $trees .= '<ul>';
            foreach ($parmenu as $field) {
                $trees .= '<li><p><a href="' . DOMAIN . 'danh-sach-tin-tuc/' . $field['Catproduct']['id'] . '/' . $field['Catproduct']['slug'] . '.html">' . $field['Catproduct']['name'] . '</a></p>';
                $trees = $this->multiMenuProduct($field['Catproduct']['id'], $trees);
            }
            $trees .='</li></ul>';
        }
        return $trees;
    }   
function get_product($id = null) {
        return $this->Product->findById($id);
    }
    function getProduct1($catId = null) {$cat1 = array();
        $cat1[0]=$catId;$i=1;
        $cat = $this-> Catproduct ->find('all', array('conditions' => array('Catproduct.status' => 1, 'Catproduct.parent_id' => $catId)));

        foreach ($cat as $row){
            $cat1[$i++]=$row['Catproduct']['id'];
        }
        return $this->Product->find('all', array('conditions' => array('Product.status' => 1, 'Product.cat_id' => $cat1), 'limit'=>1));
    }
	
	
	
	
    public function search() {

		$keyword='';

        if(isset($_POST['txtsearch'])) {

		$keyword=$_POST['txtsearch'];$this->Session->write('txtsearch',$keyword);

		}

		elseif($this->Session->check('keyword')){$keyword=$this->Session->read('txtsearch');  }

        $this->set('keyword', $keyword);

        // list all product

		$count=$this->Product->find('count',array(

            'conditions' => array(

                'Product.status' => 1,

                'Product.name LIKE' => '%' . $keyword . '%',
            )));
		$this->set('count', $count);

        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,

                'Product.name LIKE' => '%' . $keyword . '%',

            ),

            'order' => 'Product.pos DESC, Product.modified DESC',

            'limit' => '24'

        );

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

		 $this->Session->write('url','tim-kiem.html');

    }
	//shopping	
    function addshopingcart($id=null){
	
     $this->autoRender=false;
	$url='';
	
	 	 $shopingcart=$this->Session->read('shopingcart');
	 	 if(isset($shopingcart[$id]))
		 {		 	
			 $shopingcart[$id]['sl']= $shopingcart[$id]['sl']+1;
			 $shopingcart[$id]['total']= $shopingcart[$id]['price']*$shopingcart[$id]['sl'];			
			 $this->Session->write('shopingcart',$shopingcart);			 
			echo '<script language="javascript"> alert("Thêm thành công");window.location.replace("'.DOMAIN.'gio-hang"); </script>';
		 }
	     else
		 {			
		 		$shopingcart[$id]['pid'] = $id;		
				$product=$this->Product->findById($id); 
				$shopingcart[$id]['name']=$product['Product']['name'];	
				$shopingcart[$id]['images']=$product['Product']['images'];	
				$shopingcart[$id]['sl']=1;
				//$shopingcart[$id]['user_id']=$product['Product']['user_id'];
				$shopingcart[$id]['price'] = $product['Product']['price'];				
				$shopingcart[$id]['total']= $product['Product']['price']*$shopingcart[$id]['sl'];
				//pr($shopingcart);
				
				$this->Session->write('shopingcart',$shopingcart);		
				//pr($this->Session->read('shopingcart')); die;				
				echo '<script language="javascript" type="text/javascript"> alert("Thêm giỏ hàng thành công"); window.location.replace("'.DOMAIN.'gio-hang"); </script>';
	         }
	 	

		
		//die;
	}
 

	function deleteshopingcart($id=null){
		if(isset($_SESSION['shopingcart']))
		 {   
			 $shopingcart=$_SESSION['shopingcart'];			 
			  if(isset($shopingcart[$id]))
			  unset($shopingcart[$id]);
			  $_SESSION['shopingcart']=$shopingcart;
              
                $pr=$this->Product->findById($id);
                
                $this->Product->save($pr);
              
			echo '<script language="javascript" type="text/javascript"> window.location.replace("'.DOMAIN.'gio-hang"); </script>';
	          
		 }
		
	}

	
	function deleteshopingcart1($id=null){
		$this->Session->delete('shopingcart'); die;
		if(isset($_SESSION['shopingcart']))
		 {   
			 $shopingcart=$_SESSION['shopingcart'];			 
			  if(isset($shopingcart[$id]))
			  unset($shopingcart[$id]);
			  $_SESSION['shopingcart']=$shopingcart;
              
                $pr=$this->Product->findById($id);
                //$pr['Product']['daban']= $pr['Product']['daban'] - $value['sl'];
                $this->Product->save($pr);
              
			echo '<script language="javascript" type="text/javascript"> window.location.replace("'.DOMAIN.'dat-mua#gh"); </script>';
	          
		 }
		
	}
	
     function viewshopingcart(){
      
        //pr($this->Session->read('shopingcart')); die;	
        if($this->Session->check('shopingcart'))
		 {   
			 $shopingcart=$this->Session->read('shopingcart');			 
			 $this->set(compact('shopingcart'));
		 }
		 else
		 {
			 echo '<script language="javascript"> alert("Chưa có sản phẩm nào trong giỏ hàng"); window.location.replace("'.DOMAIN.'"); </script>';
		 }
	
}
	function updateshopingcart($id=null){
		
		if(isset($_SESSION['shopingcart']))
		 {   
			 $shopingcart=$_SESSION['shopingcart'];			 
			  if(isset($shopingcart[$id]))
			  {
				  $shopingcart[$id]['sl']=$_POST['soluong'];			
				  echo $_POST['soluong'];			die;
				  $shopingcart[$id]['total']= $shopingcart[$id]['sl']*$shopingcart[$id]['price'];
			  }
			  $_SESSION['shopingcart']=$shopingcart;
			 
				echo '<script language="javascript" type="text/javascript"> window.location.replace("'.DOMAIN.'gio-hang"); </script>';
		 }
	}
		
		function updateshopingcart1($id=null,$soluong=null){
		
		if($this->Session->check('shopingcart'))
		 {   
			 $shopingcart=$this->Session->read('shopingcart');			 
			  if(isset($shopingcart[$id]))
			  {
				  $shopingcart[$id]['sl']=$soluong;
				  $shopingcart[$id]['total']= $shopingcart[$id]['sl']*$shopingcart[$id]['price'];
			  }
			  $this->Session->write('shopingcart',$shopingcart);
			
			$this->redirect(DOMAIN.'gio-hang');
		 }
	}
	
	
	function updateshopingcart2($id=null,$soluong=null){
		
		if(isset($_SESSION['shopingcart']))
		 {   
			 $shopingcart=$_SESSION['shopingcart'];			 
			  if(isset($shopingcart[$id]))
			  {
				  $shopingcart[$id]['sl']=$soluong;
				  $shopingcart[$id]['total']= $shopingcart[$id]['sl']*$shopingcart[$id]['price'];
			  }
			  $_SESSION['shopingcart']=$shopingcart;
			
			echo '<script language="javascript" type="text/javascript"> window.location.replace("'.DOMAIN.'dat-mua#gh"); </script>';
		 }
	}
	
//End SHOPPING		


function datmua(){

  if(isset($_SESSION['shopingcart']))
		 {   
			 $shopingcart=$_SESSION['shopingcart'];			 
			 $this->set(compact('shopingcart'));
			 // pr($shopingcart); die;
		 }
		 else
		 {
			 echo '<script language="javascript"> alert("Chưa có sản phẩm nào trong giỏ"); window.location.replace("'.DOMAIN.'gio-hang"); </script>';
		 }
		 
	if(isset($_POST['name'])) {
	$name=isset($_POST['name'])? $_POST['name'] :'';	
	$phone=isset($_POST['phone'])? $_POST['phone'] :'';	
	$email1=isset($_POST['email'])? $_POST['email'] :'';	
	$address=isset($_POST['address'])? $_POST['address'] :'';	
	$title=isset($_POST['title'])? $_POST['title'] :'';	
	$content=isset($_POST['content'])? $_POST['content'] :'';	
	$phuongthuc=isset($_POST['new'])? $_POST['new'] :'';	
	//pr($phuongthuc);die;
	
	$order=''; $tong=0;
	 foreach( $shopingcart as $row){

	 $order.="<tr><td><img width=70 src=".DOMAINAD.$row['images']." /></td><td>".$row['name']."</td>"."<td>".$row['sl']."</td>"."<td>".number_format($row['price'])."</td>"."<td>".number_format($row['total'])."</td></tr>";
	 $tong+=$row['total'];
		
	 }
	// pr($a); die;
	 
	
	//pr($key);
	//echo $key;
	$email=array('Email'=>array(
					'name'=>$name,
					'phone'=>$phone,
					'email'=>$email1,
					'address'=>$address,
					'title'=>$title,
					'content'=>$content,
					'phuongthuc'=>$phuongthuc,
				
					'order'=>'<table style="border-collapse:collapse; margin-top:10px; width:100%;" border="1"><tr><td>Hình ảnh</td><td>Tổng sản phẩm</td><td>Số lượng</td><td>Giá sản phẩm</td><td>Tổng tiền</td>'.$order.' <tr><td colspan="4" style="text-align:right;"> Tổng tiền phải trả:</td><td>'.number_format($tong).'</td></tr></table>',
		
					)
	);
	//pr($email);die;
	
	$this->Email->save($email);
	unset($_SESSION['shopingcart']);

	echo '<script language="javascript" type="text/javascript"> alert("Đặt hàng thành công"); window.location.replace("'.DOMAIN.'");</script>';
	
	
	 
	}	 

}

	function get_total(){
	  $total=0;
	  
	 if($this->Session->check('shopingcart'))
	{
		$shopingcart=$this->Session->read('shopingcart');
			 foreach($shopingcart as $key=>$row) 
			 {
					$total+=$row['total'];
			 }
	 }

	 return $total;

	}
	
	function count_sp(){
	$total=0;
	 if($this->Session->check('shopingcart'))
	{
		$shopingcart=$this->Session->read('shopingcart');
			foreach($shopingcart as $key=>$row) {
			$total++;
			}
	 }
	

	 return $total;

	}
	
	
	public function loc($id=1){
	
			
        switch ($id) {
            case '1' :
			
			
			 // list all product
        $this->paginate = array(
            'conditions' => array(
              'Product.status' => 1,
			  'Product.price >'=>5000000,
			  'Product.price <'=>15000000,
           
			  
            ),
            'order' => 'Product.pos DESC, Product.modified DESC',
            'limit' => '12'
        );
		
        $listProduct = $this->paginate('Product');
		$title="Danh sách sản phẩm từ 5.000.000đ đến 15.000.000đ";
		break;
		
		  case '2' :
			
			
			 // list all product
        $this->paginate = array(
            'conditions' => array(
              'Product.status' => 1,
			  'Product.price >'=>15000000,
			  'Product.price <'=>20000000,
           
			  
            ),
            'order' => 'Product.pos DESC, Product.modified DESC',
            'limit' => '12'
        );
		
        $listProduct = $this->paginate('Product');
		$title="Danh sách sản phẩm từ 15.000.000đ đến 20.000.000đ";
		break;
		
		  case '3' :
			
			
			 // list all product
        $this->paginate = array(
            'conditions' => array(
              'Product.status' => 1,
			  'Product.price >'=>20000000,
			  'Product.price <'=>25000000,
           
			  
            ),
            'order' => 'Product.pos DESC, Product.modified DESC',
            'limit' => '12'
        );
		
        $listProduct = $this->paginate('Product');
		$title="Danh sách sản phẩm từ 20.000.000đ đến 25.000.000đ";
		break;
		
		  case '4' :
			
			
			 // list all product
        $this->paginate = array(
            'conditions' => array(
              'Product.status' => 1,
			  'Product.price >'=>25000000,
			  'Product.price <'=>30000000,
           
			  
            ),
            'order' => 'Product.pos DESC, Product.modified DESC',
            'limit' => '12'
        );
		$title="Danh sách sản phẩm từ 25.000.000đ đến 30.000.000đ";
        $listProduct = $this->paginate('Product');
		break;
		
		case '5' :
			
			
			 // list all product
        $this->paginate = array(
            'conditions' => array(
              'Product.status' => 1,
			  'Product.price >'=>30000000,
			  'Product.price <'=>50000000,
           
			  
            ),
            'order' => 'Product.pos DESC, Product.modified DESC',
            'limit' => '12'
        );
		$title="Danh sách sản phẩm từ 30.000.000đ đến 50.000.000đ";
        $listProduct = $this->paginate('Product');
		break;
		
		
		case '5' :
			
			
			 // list all product
        $this->paginate = array(
            'conditions' => array(
              'Product.status' => 1,
			  'Product.price >'=>50000000,
			  
            ),
            'order' => 'Product.pos DESC, Product.modified DESC',
            'limit' => '12'
        );
		
        $listProduct = $this->paginate('Product');
		$title="Danh sách sản phẩm trên 50.000.000đ";
		break;
		
		}
         
		 $this->set('product',$listProduct);
		 $this->set('title_1',$title);
		 
		
	}
	
}