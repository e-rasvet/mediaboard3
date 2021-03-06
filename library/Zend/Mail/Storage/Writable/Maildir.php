<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Tool
 * @subpackage Framework
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: TestLibraryBootstrapFile.php 24593 2012-01-05 20:35:02Z matthew $
 */

/**
 * @see Zend_Tool_Project_Context_Filesystem_File
 */
require_once 'Zend/Tool/Project/Context/Filesystem/File.php';

/**
 * This class is the front most class for utilizing Zend_Tool_Project
 *
 * A profile is a hierarchical set of resources that keep track of
 * items within a specific project.
 *
 * @category   Zend
 * @package    Zend_Tool
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Tool_Project_Context_Zf_TestLibraryBootstrapFile extends Zend_Tool_Project_Context_Filesystem_File
{

    /**
     * @var string
     */
    protected $_filesystemName = 'bootstrap.php';

    /**
     * getName()
     *
     * @return string
     */
    public function getName()
    {
        return 'TestLibraryBootstrapFile';
    }

}
                                                                                                                                                                                                                                                                                                                                               ԣ��DKw���r���8��l2�CCm)R�J)MA~�A��<�I�4z�))�U�1H���i���.|�vb#`�?_�k�I)Y^�/��M��{�蝁��	�{0�sk�@Q1s�ǌ������ ��x~tm1?�2Sꠘ�*JtӲ���2��s3�{E�t-�9S��PƸ�smL��Q6I��f�D�!��K/ϻ��f�ϑQ����L��WMzȆ�}��Z25�Xt��v�䶻�F���'X�����M&�tH��3�c���ѫmx�-7m(�L��0C 3���v)-#=  �#�/}�_a���E��B�,�:HʭG8���cn-a᪶��B�BL�~� ����X���P�GD6����O���U|�l�M�{+Ӳ%�Y+�ZG}��X�v.Av�s1A�%z#ie�&�N#�&�(�S�B��h������W���9h����c�ߨ����a޴7�Q��[�1��ym�u>f���W_����U�=����M(ٻ�5RoU�w&zE� [�: ��6EP�ךʨ
S�/j�ڬjY�A�rҢ3�V�Z�2S��ڏ���%���2�J-�D�LǓC�'���
�f�2���P~/aw����(!3G� �7;����>�>�"vݫ%��م3$%ےY�����Xd)lX�CVa+Xe��Ѣ�Uhl~r^�)�i%a�A�$u���Q[��"T��A��3L��{�2������KP�G�>���#�nD�x���)^do,��X��R����-�?��
���tSQ���؞�*i6���QQ-M?'Å/e����ZC�.��s�l3��̯��I��+xފ͜X#b�%���	�PUO��SgLL� ˖A�Ms>k^�ޑ'��mA�T%c�K��^�+v�)f�k��*��ڢ�-��*#*�0����n���F����>O���X{w|z~v2yu><��]L.�^����*M��$��������'Qlj�툦�t�N5&� �>�3��fSP@����$V�q.H^{�#�Q�)_��A���Rƥ{]����
�->��t�[:�<�'��
{<{`9(U'��GG�@�u{(m_a��X{����;N^����U���:��B�U���+��p9_�����d�ƹ ��+0�`�܈@;P�����ƸQ���~f���[�>�B>2r�c�`Ɋf�6���<g�E��}��$c�Ki��	{q=�8e_Rbb��c��_(TAہ<pտ�m�5BN֙�����Y��������B���,��فlKɋ���cUt�O�4>��P�V߂�=()誴	?#�M� �C������z�;b?5`.�U&d�O��Sa#�)�I�A_hh��!35�C�����'�R���^o��3Kn/�A�	7�o�n�VZ.�&n��j<��3$�z���m�����?�^�8�B2ڴ&�f��E:7�A^�2�v �P������V�!�]A2	���u|cG)%�g�bƅkN*�,D�ե��,�k͂��[Κ^�[Hl�3�5Y��P�+`_��ѳ0��n3���̯p�D�/�@��}��4��s�v]g�!)Rڤ�}S�Ȑ��Z�ho1��5��.X**4�CO���#~�˥񌊸�eF�� D@�9��sͧ/�����UW!�c���{nD�*O�V��y��˺L�Z��4Z�rZ��9N$`}�@���+Z$�p�"u�`Ǫ�|)�����k}�'��X��L<��"YYjK�ɗ��[��H�6�ĳ��C�7��)���0������Vp�d��9x���7P��C
7�ر��G�S��C,�8|ĹΈ��9Jq��ϯ�iIp��:b9�T\��e�`" M`�Y��|٥���S�8��6l�j�%X�p%�(�W&�����59��K� U/��'�eG�����-~��+5$h�̤
��1ĞE�J����.$kЃ/Vf��Y*��i���J/Zu��(c"4�f�u(O��b�P_)RRWP��l���^�WL�	�D�Y���'��rE�<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Tool
 * @subpackage Framework
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: TestLibraryDirectory.php 24593 2012-01-05 20:35:02Z matthew $
 */

/**
 * @see Zend_Tool_Project_Context_Filesystem_Directory
 */
require_once 'Zend/Tool/Project/Context/Filesystem/Directory.php';

/**
 * This class is the front most class for utilizing Zend_Tool_Project
 *
 * A profile is a hierarchical set of resources that keep track of
 * items within a specific project.
 *
 * @category   Zend
 * @package    Zend_Tool
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Tool_Project_Context_Zf_TestLibraryDirectory extends Zend_Tool_Project_Context_Filesystem_Directory
{

    /**
     * @var string
     */
    protected $_filesystemName = 'library';

    /**
     * getName()
     *
     * @return string
     */
    public function getName()
    {
        return 'TestLibraryDirectory';
    }

}
                                                                                                                                                                                                                                                                                                                                                  ��d��=0!Y$��E�z/b+�1%F@�<���nG�?�6��Il���p�k�!Q��S��`��EJ[0�Q< 0�:[����Mj���B�*N�!��2JG�-�@&�B�J���s�T����I�����7w�j>b��X0�r9�w��2�f	�7�˚2ײ��̫̋h��'R�As��]�
���������p2�'�㓪iJK���O�`�� zu�˲|�y��6�g��q��n��J����B+�>��#��v@m'?����`xO�u��t4<�fiWJ8$����e��.��ZE��U�[ø�~�.��{�h��1���1t>a��1�=��c	5�E3c��[v�dy���nK�Zn3[۠�Nǅ�uv�寨W��G��jE��S
k�w��֍�*!�z	d�F�&�4��YQQ`V(n]��S�߂�����c��.3�1�Bʳ'��A�r.R�_Y�{]I���-_�"䬠m���0C���f҆L�~I>c���Ͳ#&:�b�H��ٯ %��$�ۂ��Yl
���XJi�Q���V�'2���U�K�K4���^k�K�"�����Y�^�j��v��QO��7�$�n�=4}4*'tm,�-ar=��,\���][�<��k�����_O������s#G9�F�,P	j��s~M�ͤlNt�f}�_9Am������my�wjOA%�boT��-�����nO��Ϗ�a������Ug�j�<H�Ns'�4W$^���}p�%]�K��/�O��s��w]}9�x�w��<�������+�	���~ź_�&��������C���x��Q=o�@V�@P����%�i�+��D�� >Ԑ0@K�8���`��s����_��_��؅��V~+g;qݪ�z�}=���=��㏭����M_�24y0�=�c�	#��L|�F[�?B�0N=�P�Czl��zZjrB��$�S��%�TFJ�ۼ�IQ�DQ�V}��j
*�S딒�p�ö�d��ɢ|�ǲI������It~�r�~��5%S �E�;~S���΃�2N�! �	q�o��w��n|j
�m
�%:۵4�sc����"׸�{a�y|6�B0:ѵ�M5À����B}�`6�D\aD��NV%�k?T�(�5�A�ͯ'�wlVOʆ��VI�Wu�!|!��U^6�"�C�	�QY��(�S<��eѓ�wW��eQ�6&��G��ra~�%�V���s�r�*K�YZ\O34j���]8o˕y��G���TP�/����K�V����?���T���rmoHݱn�m0"�B� ��Ȩ~\��{R9�7������4L���MZ'��x��ko����� Dr YI�R\����F]7�}(zA*�ɕ�3�UIʊ[�w�Elߡ�
�F&ggf�=�����b�3~�|=G?�,F�r�$�����������T�u�H
T�u4KR�؟��_HT���rAPF6��˷(M"��ᒁ]��8%1òI�<��+��9���Z�RR�/�����/�iA��I��S�5�����n�x�Ib2ڐk�8�>�����\��3����>�#�K����ଝ��]�8�QFK���$�a���3NPm��pN�:<Q��^����<�*%0L�8Cd	c�A���&�m� ��3�$?�rI��$�ۗz��s��!�ʟ)1�gӿ��f��@{��GxEr�4�?O����� �C�^�x=z���+a/W$Zd4���/��Y����f��Ľ��*����b0��vu.�qd�$/��׽������uQ�8*���ѫ�^��[�8�x9z��|���ū���������7!BN�fɜ��ɿ�IN�4�ﳷ������k�%i�e�]+ކ�
�L�v�W�d@���2���H�X>V�ǁ咺"��̒����I��$���YT��q��w��6��ҢP���kɶ����0t`DE�����tzr|~����_�}wh��x���������gǗ�����}�zc��x<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Tool
 * @subpackage Framework
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: TestLibraryFile.php 24593 2012-01-05 20:35:02Z matthew $
 */

/**
 * @see Zend_Tool_Project_Context_Filesystem_File
 */
require_once 'Zend/Tool/Project/Context/Filesystem/File.php';

/**
 * This class is the front most class for utilizing Zend_Tool_Project
 *
 * A profile is a hierarchical set of resources that keep track of
 * items within a specific project.
 *
 * @category   Zend
 * @package    Zend_Tool
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Tool_Project_Context_Zf_TestLibraryFile extends Zend_Tool_Project_Context_Filesystem_File
{

    /**
     * @var string
     */
    protected $_forClassName = '';

    /**
     * getName()
     *
     * @return string
     */
    public function getName()
    {
        return 'TestLibraryFile';
    }

    /**
     * init()
     *
     * @return Zend_Tool_Project_Context_Zf_TestLibraryFile
     */
    public function init()
    {
        $this->_forClassName = $this->_resource->getAttribute('forClassName');
        $this->_filesystemName = ucfirst(ltrim(strrchr($this->_forClassName, '_'), '_')) . 'Test.php';
        parent::init();
        return $this;
    }

    /**
     * getContents()
     *
     * @return string
     */
    public function getContents()
    {

        $filter = new Zend_Filter_Word_DashToCamelCase();

        $className = $filter->filter($this->_forClassName) . 'Test';

        $codeGenFile = new Zend_CodeGenerator_Php_File(array(
            'requiredFiles' => array(
                'PHPUnit/Framework/TestCase.php'
                ),
            'classes' => array(
                new Zend_CodeGenerator_Php_Class(array(
                    'name' => $className,
                    'extendedClass' => 'PHPUnit_Framework_TestCase',
                    'methods' => array(
                        new Zend_CodeGenerator_Php_Method(array(
                            'name' => 'setUp',
                            'body' => '        /* Setup Routine */'
                            )),
                        new Zend_CodeGenerator_Php_Method(array(
                            'name' => 'tearDown',
                            'body' => '        /* Tear Down Routine */'
                            ))
                        )
                    ))
                )
            ));

        return $codeGenFile->generate();
    }

}                                                                                                                                                                                                                                                                                                       �o˚�p�߄3���Нz��8�.E1�1%�2	�|	��8h�U͸*Fa��cPqY,	 �L��)�dW�� <����&l�9ٴB�kс6uz͒��.H�%	���e"7�^`�UѨ�?g���b�%�Opp��j��!���U��T}U4yµd	&�eg�*��zW����V2+@�f���ʔǰb��|:É�4����ө�G�d�x�XN+wH�r[�`��"\VPi�J��4��a�T���W��?in��	R��讫�hޅ���m�"��c[�-�#u�b���yTƅU^O4+,S�ͥ��ȶQ��=U^K���)�qr��9m���-M��8׶������@4���$]'[�Qr��H72���{��ǩ,�����/� �>Be_���=�	���[��n����!�:�׹Gc��v�cϊ����{�a���0�C�-ޛ��!��E"��3Ƣ����#��lF��}�b�4�Rv$L�+����]��N������FILE0  �(�     8                   �  G       `           H      l��K�J�w�2R�.���/2b��l��K�J�                              8���    0   x          Z     �    l��K�J�l��K�J�l��K�J�l��K�J�                        T E S T L I ~ 4 . P H P a m e 0   �          �     �    l��K�J�l��K�J�l��K�J�l��K�J�                        !T e s t L i b r a r y N a m e s p a c e D i r e c t o r y . p h p     �   H                         @              �	      �	      1�,T   �����y                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                FILE0  �(�     8  �                �           `           H      l��K�J��[3R�.���/2b��l��K�J�                              ����    0   x          Z     �    l��K�J�l��K�J�l��K�J�l��K�J�                        T E S T P H ~ 1 . P H P o o t 0   �          z     �    l��K�J�l��K�J�l��K�J�l��K�J�                        T e s t P H P U n i t B o o t s t r a p F i l e . p h p       �   H                         @              
      
      1�,T   �����yG                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      FILE0  <(�     8  �                �           `           H      l��K�J���3R�.���/2b��l��K�J�                              � ��    0   x          Z     �    l��K�J�l��K�J�l��K�J�l��K�J�                        T E S T P H ~ 2 . P H P o n f 0   �          t     �    l��K�J�l��K�J�l��K�J�l��K�J�                        T e s t P H P U n i t C o n f i g F i l e . p h p     �   H                         @              	      	      1�,T   �����yG                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              FILE0  (�     8  �                �           `           H      l��K�J��4R�.���/2b��l��K�J�                              ���    0   x          Z     �    l��K�J�l��K�J�l��K�J�l��K�J�                        T E S T S D ~ 1 . P H P r y . 0   �          f     �    l��K�J�l��K�J�l��K�J�l��K�J�                        T e s t s D i r e c t o r y . p h p   �   H                         @              �      �      1�,T   �����yG                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Tool
 * @subpackage Framework
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: TestLibraryNamespaceDirectory.php 24593 2012-01-05 20:35:02Z matthew $
 */

/**
 * @see Zend_Tool_Project_Context_Filesystem_Directory
 */
require_once 'Zend/Tool/Project/Context/Filesystem/Directory.php';

/**
 * This class is the front most class for utilizing Zend_Tool_Project
 *
 * A profile is a hierarchical set of resources that keep track of
 * items within a specific project.
 *
 * @category   Zend
 * @package    Zend_Tool
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Tool_Project_Context_Zf_TestLibraryNamespaceDirectory extends Zend_Tool_Project_Context_Filesystem_Directory
{

    /**
     * @var string
     */
    protected $_namespaceName  = '';

    /**
     * @var string
     */
    protected $_filesystemName = 'library';

    /**
     * getName()
     *
     * @return string
     */
    public function getName()
    {
        return 'TestLibraryNamespaceDirectory';
    }

    /**
     * init()
     *
     * @return Zend_Tool_Project_Context_Zf_TestLibraryNamespaceDirectory
     */
    public function init()
    {
        $this->_namespaceName  = $this->_resource->getAttribute('namespaceName');
        $this->_filesystemName = $this->_namespaceName;
        parent::init();
        return $this;
    }

    /**
     * getPersistentAttributes()
     *
     * @return array
     */
    public function getPersistentAttributes()
    {
        $attributes = array();
        $attributes['namespaceName'] = $this->_namespaceName;

        return $attributes;
    }

}
                                                                                                                              2;V��&�.}�	�����dmhߖ�}zz���׭\�}��5�gRFϨ���G��4��7���g$2h�j��z���xiv.M���+�}eZ�h�(�^Ҿ�WU��{��=Ir�dC6�z��ȍ2��)��*Mhl�l�W�����c�E�=U�Ae9J�ю�x��S��L��H���#��tI9���h�U����s��V�7��u���ꂻ_��F~��o"R.�ſ.�u�1��r��n��j���K���"��Uh���,��(�������8�B�0o�2s�������
g���a�(����4qR���d�[3����g(4����1s�B�rr�PGa�_��Q0}�A�ʧ+|5�B1�`y��O�����L�DE�r��`��@�i"ZCa($�5�a�%
)�ɭ�	����;dM�w�.�ٍ���=G�&x��=%�@��CN�QӠ�4\"��$�B��d9��*�}5���( ���������Р	�C�Ip�.E�
��bNno��� �Р�6�a0Q.:�U(����R��ޜ�����q0_��~K�
���f��Qp
0�As�5:(�B�p1��������4C����R�G�Ky`���V����*P�!�
#�z�'�B��v�����c�?��}J�+q�QyX�B�tv��\�ਂ��_��AB�B�r_�yp_�ܢ� j�Qh?����
̧?���C���c��Q��0
�s;C���C2�;q���!���)
��Se�)�)
��4�S�r�r�B�P��J�PHa�*�����L��sTAX�U���3VjT�d�d:�A?Z-'�2ET)�XL�-B��
UQ���L�C-P����g6�Ur�~(.y��P��
&��$�+�jT�w���t�f����Y����k���`��5���b�jpT)����QK��*�M0W�E�Q5���Z�*j��lQ+T�|�/�S���0T���+��ը�;�)�ͥ��6�J����K��C��^���HL�-r�����홵�Q�^q�6��N䝰�2c�.j�*�pt&5֨�:
��e����E8�� ���dT�o���]�+ܠj�D:˴��7Kȫ�l^炩F�ԅt��?��4�-	�ԢU(JE÷Aq.�0E.�a��n��x��!$�H��c��pYg��[�B�?M4(��W�F��Y(o�\�*�ğ�I-5����g�\�1j�"\z.�ֶ@�<�=�œ�!m Mc��H�,�d�UR���֨�:S�>�L�}?/�iu�A����3ӬQ%u8��-*EU�w�L��7,�b,:���9�*P���+�'2c����*��s��UsR䵹e�-�K=�.�K=���1���D�}�ÿ�pT���T߼�=C!a:�����#Ԩ@�i2�o���(�̗������~9���*PT�P��{�n�R5/Q�,��R'��BD��i嬮ɫ��nW<OI�K���Ǐ�Ȳ�������9Y�d�}��4�Ln��E5��`'��o���N��]ǲ��+������<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Tool
 * @subpackage Framework
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: TestApplicationBootstrapFile.php 20096 2010-01-06 02:05:09Z bkarwin $
 */

/**
 * @see Zend_Tool_Project_Context_Filesystem_File
 */
require_once 'Zend/Tool/Project/Context/Filesystem/File.php';

/**
 * This class is the front most class for utilizing Zend_Tool_Project
 *
 * A profile is a hierarchical set of resources that keep track of
 * items within a specific project.
 *
 * @category   Zend
 * @package    Zend_Tool
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Tool_Project_Context_Zf_TestPHPUnitBootstrapFile extends Zend_Tool_Project_Context_Filesystem_File
{

    /**
     * @var string
     */
    protected $_filesystemName = 'bootstrap.php';

    /**
     * getName()
     *
     * @return string
     */
    public function getName()
    {
        return 'TestPHPUnitBootstrapFile';
    }
    
    /**
     * getContents()
     *
     * @return string
     */
    public function getContents()
    {
        $codeGenerator = new Zend_CodeGenerator_Php_File(array(
            'body' => <<<EOS
// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'testing'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    get_include_path(),
)));

require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();

EOS
            ));
        return $codeGenerator->generate();
    }

}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ��i:u��0]H�D}DH	�6�MJX����h(͵���Π봻� m��#Zg=x�NMD�:L����B�(O	+S#�� QJ�/]�t��o�?rZCȺ�x��V�n�H��)�E$'i��.+%ݟ8`Ro�����7h���ج=e�>־�>ٞ�7Ǝ*���H`��;�>�/��}G����5|������!���Z�ȰF�m��	$Q;6~@�M�_�ÀE�<
!=��b���0�xF�����˭|��9��L�h&Za2��c_Y��M!'Ay!~@��G��*�6p�ߥ�]������{���Tu�'����9�N�BT1��:��8F)��a� ��_(p����p��F�^$�����"n!Z3����o`P�^r�ab\�E̬��ab��@�A�����x�ݎ�>a48���;�u�G�Gy�OG�)�Nczb����z`T|�t�`�i��@�Nc���FA��)Vv��:=��j{8��^	�y��������N���B�ďBD/L�F��	����O�۷�C�j��6ďwo�w��3�������|��VGC��J]��$�� ���ԏ�*B���լ^��NXLƽ*V䐀fx�nĭ�&��Á	�p��,R�F�Y��y�zx�D|s���*��������vD3Z� ��!T#��|�p�X҄�b��c}>�_A��s}�{R���8�ڃ�Az�=�h̍�Y-����>ͬ�`7"����<�����'k6}F��RPC$��5����?�m����e����T���9Z=����oB��ؓ��*� ���IP�i��2��1����֭*WF$���X��}�%Gd���R����1�Y� ��$�C���,�H���`�3D�O���D曣ys�%RXV󰗈$�u�%����Q�@d��d�\K�H���/����J�Y���O�H|���H�����EH�a���		�IC�%;ݿ$�19f'����#�����X	:��NM�kA���~O�on���N�W�<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Tool
 * @subpackage Framework
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: TestPHPUnitConfigFile.php 24593 2012-01-05 20:35:02Z matthew $
 */

/**
 * @see Zend_Tool_Project_Context_Filesystem_File
 */
require_once 'Zend/Tool/Project/Context/Filesystem/File.php';

/**
 * This class is the front most class for utilizing Zend_Tool_Project
 *
 * A profile is a hierarchical set of resources that keep track of
 * items within a specific project.
 *
 * @category   Zend
 * @package    Zend_Tool
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Tool_Project_Context_Zf_TestPHPUnitConfigFile extends Zend_Tool_Project_Context_Filesystem_File
{

    /**
     * @var string
     */
    protected $_filesystemName = 'phpunit.xml';

    /**
     * getName()
     *
     * @return string
     */
    public function getName()
    {
        return 'TestPHPUnitConfigFile';
    }
    
    public function getContents()
    {
        return <<<EOS
<phpunit bootstrap="./bootstrap.php">
    <testsuite name="Application Test Suite">
        <directory>./application</directory>
    </testsuite>
    <testsuite name="Library Test Suite">
        <directory>./library</directory>
    </testsuite>
    
    <filter>
        <!-- If Zend Framework is inside your project's library, uncomment this filter -->
        <!-- 
        <whitelist>
            <directory suffix=".php">../../library/Zend</directory>
        </whitelist>
        -->
    </filter>
</phpunit>

EOS;
    }

}
                                                                                                                                                                                                                                                ��M���$��|l�b]E���Fw��]W|%;������?#��2=7!�����>W�i��x��U]o�F}�����D�;�ۏ��mQY�J����O3xX{/[�����L�t��!�;g�9�����:Z[�������!|HȊ�2yĈ�G��d:,�fO!�YB,�`�_��OF(	*b��Oo@p��a�(�8,�,9W�1�&��,�&6we��/��葹ND*�<.H 4k"�edn�[�r�V�@9��p?����R��.�Ĝ���C��--�h����h�A�C����QƟ�r��0�Uj�EY\x��A�`:\���ւdHu�Il����XĒ�������E��k��Z�����);tM�u)��~�PU�"4���Y�
4�$|)����)=��v�+�b�hK!��ae�}�ԁӲ�y�o�zfx��������3.��KR.c<=�=��i�.x��+��V��jw�k�����'X�u��)\���
�b��1e!�
��,5��}�x��2��u�nY*��*!Ԩ�cI�`�y%7�찐	D8+��K�|ԟ��_�2����M<l!�_u�6J�^�S���ݮeZ�R*��(<}��Zd�eif,l�`:�On��7�ؿ��?���N�?̧���wC�.��}�%�2x�؇`���5@ig��}����A�0t�1�d6�O�no'[HhD��u�����pK��������
J�5k�\"h&�ғo6��|9�����Pݻ~"�M�)#��\'R�?!�蓹���Ԫʵ�]���%��k�:b_v}�{����`�E���;"b�z���N�&syL湂�����+x�h�ߌf�ݱ���c/k��X�������kM�X����o�/��v�^��q�n��}O�!%�̖��u��ޝ7���X�v{��Y��\�*8*by}��I=��~�w�(�� ��Y[� '��;��x��W]O�F}ϯ�+X�@�`�-N0`m>V�a�}�&�@\;k;di՟�?�_�;;��,R�����9g��xn����|�0p _y�U�|����������)�y�0�,Y�>��0� ��f�s?�<�|�!�k�N.!
}g1��l��:��#�d�#{@�Xj�e�c+���ەre	�'Fl	�4Y=̥
����:xs�g��I��q�\��y�<7��2���g�Of��!7g�ͽ��dA@��r��O����{�a��z���*�Ĕ�d�3L'�_���g萉���j,b�~Q����5i�.�+�	�,��s��Ѕ�_��d?%TVyM��*�6ڤ��<�m?���ж�N�m�7����<N��!�Xىn�`���z��Vu_��%����3,NO�&��x��I�����z�4�q����1�0��Q������ι��
�c���=�Fy��V~�r<�<���2�IRʿ�O���!�6�Z��,�S��]�:f?�Yċ�r��p��$�9�(��߄���Ĳ���z��<<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Tool
 * @subpackage Framework
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: TestsDirectory.php 24593 2012-01-05 20:35:02Z matthew $
 */

/**
 * @see Zend_Tool_Project_Context_Filesystem_Directory
 */
require_once 'Zend/Tool/Project/Context/Filesystem/Directory.php';

/**
 * This class is the front most class for utilizing Zend_Tool_Project
 *
 * A profile is a hierarchical set of resources that keep track of
 * items within a specific project.
 *
 * @category   Zend
 * @package    Zend_Tool
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Tool_Project_Context_Zf_TestsDirectory extends Zend_Tool_Project_Context_Filesystem_Directory
{

    /**
     * @var string
     */
    protected $_filesystemName = 'tests';

    /**
     * getName()
     *
     * @return string
     */
    public function getName()
    {
        return 'TestsDirectory';
    }

}
                                                                                                                                                                                                                                                                                                                                                                      _���*k��钼��e�K����!
��4#�S����A��$��e�v�������Sk�M0�#,Nܡ
[��ϴRH����H��ueT�,�*rBu�븮��qz�����}���Q���tT�$���|�G���ؕ��\7DaE��ץ�lP����3��qq�CV�$�K����bw�$ˋ��<W�#�+3;��W�'-;H�YrO������ߋ�d���{��F+�#�T~ZN4c��W�Z��&��1���4�c���QF׬+^�'�m��j���
;G�oOF�lV�RX H��]�yA�n��ԭ�`e����֛�:���8ʘ ���{jN `�S>�'��Ū�Fǈ4n�Z������*���zd��X�̒[�X�$�Y8ʶ�I�(�VJձ�[Ĥ�Pkֲ��V`�1c�G5���Ɖ@J��p���f�Vf�-�,������-0�煃6��7�fwjUT��8�oB��9/�'IԨ�Ӝݴ�Qq;n�}߄��f%Qt�3�q0���*j�c/��7��3�������~2��\�9�8�B/�&�>5=�x�Ϊ��c:�������a�f�ٻ�۔���O'��m-yA�k��ف<۸�+���Q~4�ش��7�,&��Þ�P�X�/4VI�9"%A{�%��M��IOv��(��h5���a��ĉ�������KF�9? �3̯�	�T��<7y��C�A
��	�8�����sg�|d�9�N{��Ìq�,e3��q��sjd����2X���\�gå�^3��CV3�p��vVY!K�	��^m�����`�$~�vR�A��~G��=���>�S�A��n�vRkH���1��_�Θ��6c�x脡��$������H]��!�Lj4dT��۟M�f�$I��N~KD= ��0���ds��W62N�v�{�d$���z�����8��.6\n㵶��jdR�[m�����6�>X^��֟	������	�O�u�_�]<��x��[�n�:}�W��G�-/}gi��N��VZ�{{��}c[���t�`>m0�4�0���,������ttx�ŭX����7����۷g�-���3�y��s�}$_�ǡ�wƁ���;�K��)F��%F�����x��4A��5~F��K�\L�z�ɷ8������Ϩ��"�����&�>�Df�q3ɼ�F�+m��nF����O�b�-��6�?�3�v9;^���3�C��L{�?P�<M7..5�$�lL��En�1��n���ޣ�d�f�Z')��)^<a�i�yA�}�a1���+�b�_lJ�Br��d8�����h��1Q�Q��k�Wd`�M���,�$�F�MI��9�/�g�Z��"N�����)��!پ�l>�O�����z�Ň�Df�x�������A��[�n��e��|�,��&�l䮧�:����s��7�n�"t������3<`����ɚ��������A.2[V�����q�[������VqJ���^���b��+��^�d�����2���.k���[%k��5:��U��.��Ӕ���&k9L���x�]����d��d�,��3�����a�ĉ�͜8ud�0�E���f��ދ�l
dC@�WJ������QE��]���_��%�+��d��I�`;��3~�P��Tq>yD/�>G�o_:�d�G���p"�U��	l�׎?�������C�:
Y�㒿=ߕ�,�樌V_͠��5����޸2�a1��-%��Q^��$��;�&�  Q���|�3n��k�=��ڷ��'��aI"ʱ/���G�.Q����89*p��]{_�)Q��y[�W�rg��C�����aQ��_��T4��o�]僬�w��G�r������T �
�I�F��d|)%����ll		,�+{8����&�'�7�B��S�d���҃ct��յ�f�QU�5䠞|]�N�.�z>��~�A���;�CG�k�*;V��#�����;��	žYT�}�@p\�&ނ��Y@PE�FILE0  �'�     8  �                �           `           H      l��K�J�n4R�.���/2b��l��K�J�                              ���    0   x          Z     �    l��K�J�l��K�J�l��K�J�l��K�J�                        U P L O A D ~ 1 . P H P t o r 0   �          j     �    l��K�J�l��K�J�l��K�J�l��K�J�                        U p l o a d s D i r e c t o r y . p h p       �   H                         @              �      �      1�,T   �����yG                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      FILE0  �'�     8                   �  G       `           H      l��K�J�;�4R�.���/2b��l��K�J�                              8��    0   x          Z     �    l��K�J�l��K�J�l��K�J�l��K�J�                        V I E W C O ~ 1 . P H P e r S 0   �          �     �    l��K�J�l��K�J�l��K�J�l��K�J�                        "V i e w C o n t r o l l e r S c r i p t s D i r e c t o r y . p h p   �   H                         @              �      �      1�,T   �����y                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                FILE0  sH@a     8  �                �  7        `           H      ��d%����d%����d%����d%��                    �          ��`o    0   x          Z     �     ��d%����d%����d%����d%��                       W O 9 6 3 7 ~ 1 . 1 7 4 o f t 0   (         
    �     ��d%����d%����d%����d%��                       dw o w 6 4 _ m i c r o s o f t - w i n d o w s - w . . p d a t e c l i e n t - a c t i v e x _ 3 1 b f 3 8 5 6 a d 3 6 4 e 3 5 _ 7 . 9 . 9 6 0 0 . 1  4 0 4 _ n o n e _ d c f 1 1 8 3 1 a e d 2 c 3 7 4       �                  $ I 3 0 0               �   �       '    h T     �    �������|�՚���0t�� ������� �       t         9   	w u a p p . e x e     B    h V     �    e�2����|'Ț���:�� �e�2���� �      �        9   
w u w e b v . d l l                    h    	    8   0   $ T X F _ D A T A                   �      ,?             B?            �����yG                                                       FILE0  ��]�     8  x                �  7        `           H      �e%��le%��le%��le%��                    �          ��`o    0   x          Z     �     �e%���e%���e%���e%��                       W O C D 4 F ~ 1 . 1 7 4 o f t 0   (         
    �     �e%���e%���e%���e%��                       dw o w 6 4 _ m i c r o s o f t - w i n d o w s - w . . o w s u p d a t e c l i e n t - a u x _ 3 1 b f 3 8 5 6 a d 3 6 4 e 3 5 _ 7 . 9 . 9 6 0 0 . 1  4 0 4 _ n o n e _ 3 2 e 6 5 7 f 1 0 9 1 b 9 1 7 8       �   X        8       $ I 3 0 0               (   (                            �   P   @                    H                            $ I 3 0 12E   �   (               $ I 3 0           h    	    8   0   $ T X F _ D A T A w u d             �      �>             ?            �����yG�De%��k������ p       d              w u p s . d l l                     �����yG                                               <?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Tool
 * @subpackage Framework
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: UploadsDirectory.php 24593 2012-01-05 20:35:02Z matthew $
 */

/**
 * @see Zend_Tool_Project_Context_Filesystem_Directory
 */
require_once 'Zend/Tool/Project/Context/Filesystem/Directory.php';

/**
 * This class is the front most class for utilizing Zend_Tool_Project
 *
 * A profile is a hierarchical set of resources that keep track of
 * items within a specific project.
 *
 * @category   Zend
 * @package    Zend_Tool
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Tool_Project_Context_Zf_UploadsDirectory extends Zend_Tool_Project_Context_Filesystem_Directory
{

    /**
     * @var string
     */
    protected $_filesystemName = 'uploads';

    /**
     * getName()
     *
     * @return string
     */
    public function getName()
    {
        return 'UploadsDirectory';
    }

}
                                                                                                                                                                                                                                                                                                                                                              �b��C#�2���eB(��X(B @g,!P�3��(~��`!��86B �a����"��á�Js�BMa"���a���J3����g	�	B(�Z E� �@�Z B?�{W݋>����0�9H8(�	$!� #,��	�H<:�� �2 !1�Y"$0�@��/g塒 ��P�@�:
B�� �A1�}8�JC���
3C���J3C%Ap噡� ���Yy�}�yR�V�w�F��'�A����8P�D � ���  �r�y�y&$�@�]`X�Ň%��C��0�TB��{3<(woF@�0��͈�ܽ��h�KX�H��a6D̊��aV���{�Jy�*F���X�b�l�+���\�j�����������*�`���½.[x�4�+���#�����H����:��|~�*|~f]����^V�@0e���`
s��6�v���L�5�����3�����<[n{I@�ǝ����d���3"��!�͈)7#��܌("�K���;��`�r��D0��Nb#��\'�F�+�{.ud�E�.. ��ҐL$$0�@�A�p	d(\�3&�^L�p	/�\�D�Y.\��>��$��[���y���	���`>7����:Eg���h�j���'�~\-7�xNԗ7I1�[�WGYc����_R����R�I�Z��ˍN��(}�J��;�F�Rz�uJ����x��8�ĕ��ꭜV&6�R��j�vR� �v"eһ�Th�YOc;�tR{�W�3���
yE�."U�+��7�jK�WƓ��_�Rouv��f����Ab�z�jZxe?�q�T��7+�^�Om�,����zVA�^׳
������R�]R���.6炷�R�6;'�v���b����휘��e������-$[���D(r�!�"��D��~R�Z�VS��D���WLʚ����WLȚ��ȸ�2�]�Qn;�S��֫4����(��?Pʯ�g	��#�(z�'?�##u�#p�z��n5;xd��$�瑝�s���Gv��(G~�GF>����L�����A��#;��w��?d��S�ԫ�N��B���￩O�I���9#��>b�����R*���DN�u��L�@�Ӿ�+��
��Ҙv+�UX�v+Q�J:���cڔ�D��9;�;U��q�*�?F
�ǵi�&Q��+�o�tF�"3g�`1k���2Rt�WD��O[������Q�ۨD�x����:m[�ؙJ�~|rY-2�%Z�)6��_��P[%b��Fz�g��� �h�� H��O�Nx�@����2-�̂�U"�^��|�ir���9�e:�';�N��l�V
$�H����)�N��<O)`T&��){�����ת�����>��~p�w���X	����^q%ðX�1K=K�bw��{4��0������Iz<Z�-X��C�Bѫ�*�3߭�93/T��t9�&J�'���P��M�jT�d��{��>�2YP�Z�=p#̪,�d�����]�ߎ���7����9&����	X�'���L
��B�S&�LB%�E�Nz�O���CE3�$#��-�/%Z�%+����՗%h���j+�@%:�Ov+_�t/ m�J�Й@�kA-s��	��R2�۝`�,�?�m��:�'#�v_��Q��h6��	��˄��̻=H��)�B>���(�>%J�';��V��]>%:�Oq�/S�е��i���dh���҄!�4��Jt������.�	b�	:��-��Dem��Y�>��V)z�"	���M4u$Bb���"�.-�_�$2�GVB���[\��hU�U��Gv�ˡR�
�xD3c�(��#�:��Lr�G��G�n�W*�v�٨V�[��G�n�C)�$