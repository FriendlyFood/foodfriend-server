<?phpclass Producto_model extends CI_Model {    function __construct()    {        // Call the Model constructor        parent::__construct();    }        function get_product_UNSPSC($UNSPSC)    {        $this->db->Select('tbproducto.NombreProducto, tbMarca.Nombre AS Marca, tbCategoria.Nombre AS Categoria, tbproducto.idIndicador AS Indicadores, tbindicador.Kcal AS Calorias, tbindicador.Grasa AS GrasaTotal, tbindicador.GrasaSaturada AS GrasaSaturada, tbindicador.HdeC AS HidratosDeCarbono, tbindicador.Sodio AS Sodio');		$this->db->from('tbproducto');        $this->db->join('tbCategoria','tbproducto.idProducto = tbCategoria.idProducto');		$this->db->join('tbindicador','tbindicador.idProducto = tbproducto.idProducto');        $this->db->join('tbMarca','tbproducto.idMarca = tbMarca.idMarca');		$this->db->where('tbproducto.codUNSPSC',$UNSPSC);        $query = $this->db->get();				if ($query->num_rows() > 0)		{		   return $query->row_array(); 		}		else		{			return FALSE;		}    }    function get_product_name($NAME)    {        $this->db->Select('tbproducto.NombreProducto, tbMarca.Nombre AS Marca, tbCategoria.Nombre AS Categoria, tbproducto.idIndicador AS Indicadores, tbindicador.Kcal AS Calorias, tbindicador.Grasa AS GrasaTotal, tbindicador.GrasaSaturada AS GrasaSaturada, tbindicador.HdeC AS HidratosDeCarbono, tbindicador.Sodio AS Sodio')        $$his->db->from('tbproducto');        $this->db->join('tbindicador','tbindicador.idProducto = tbproducto.idProducto');        $this->db->join('tbCategoria','tbproducto.idProducto = tbCategoria.idProducto');        $this->db->join('tbMarca','tbproducto.idMarca = tbMarca.idMarca');        $this->db->where('tbproducto.nombreProducto',$NAME);        $query = $this->db->get();        if ($query->num_rows() > 0)        {           return $query->row_array();         }        else        {            return FALSE;        }    }    function InsertarElemento()    {        class myProduct {        $this->NombreProducto= $_POST['NombreProducto']; // please read the below note        $this->idMarca =  $_POST['title'];        $this->codUNSPSC = $_POST['codigoUNSPSC'];        $this->idCategoria = $_POST['idCategoria'];        $this->idIndicador = $_POST['idIndicador'];        }        $ProductoNuevo = new myProduct;        $this->db->insert('tbproducto', $ProductoNuevo);    }  }?>