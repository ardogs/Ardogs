<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Seguridad{
private $etiquetashtml;

  public function __construct(){

  }
  /**
	 * Initialize preferences
	 *
	 * @access 	public
	 * @param	array
	 * @return	void
	 */
  public function quitaretiquetas($form = array()){
    $etiquetashtml=array("<body>","<header>","<nav>",
 "<article>", "<section>", "<nav>"," <aside>","<section>",
 "<h1>","<h2>","<h3>","<h4>","<h5>","<h6>","<p>","<footer>","<address>",
 "class=","<main>","<em>","<strong>","<small>","<s>","<cite>","<q>","<dfn>",
 "<abbr>","<time>","<kbd>","<sub>","<sup>","<i>","<b>","<mark>",
 "<span>","<br>","<data>","<code>","<var>","<samp>","<u>","<ruby>","<rb>",
 "<rt>","<rtc>","<rp>","<bdi>","<bdo>","<wbr>","<a>","src=","<ins>","<del>","<img>",
 "<iframe>","<embed>","<object>","<param>","<ol>","<ul>","<li>","<dl>","<dt>","<dd>",
 "<table>","<caption>","<tbody>","<thead>","<tfoot>","<tr>","<td>","<th>",
 "<colgroup>","<col>","<form>","<label>","<input>","<button>","<select>",
 "<optgroup>","<option>","<textarea>","<fieldset>","<legend>","<script>",
 "<template>","<canvas>","<ruby>","<rb>","<rt>","<rtc>","<rp>","<?php","alert(",
 "</body>","</header>","</nav>","</article>", "</section>", "</nav>"," </aside>","</section>",
 "</h1>","</h2>","</h3>","</h4>","</h5>","</h6>","</p>","</footer>","</address>",
 "</main>","</em>","</strong>","</small>","</s>","</cite>","</q>","</dfn>",
 "</abbr>","</time>","</kbd>","</sub>","</sup>","</i>","</b>","</mark>",
 "</span>","</br>","</data>","</code>","</var>","</samp>","</u>","</ruby>","</rb>",
 "</rt>","</rtc>","</rp>","</bdi>","</bdo>","</wbr>","</a>","</ins>","</del>","</img>",
 "</iframe>","</embed>","</object>","</param>","</ol>","</ul>","</li>","</dl>","</dt>","</dd>",
 "</table>","</caption>","</tbody>","</thead>","</tfoot>","</tr>","</td>","</th>",
 "</colgroup>","</col>","</form>","</label>","</input>","</button>","</select>",
 "</optgroup>","</option>","</textarea>","</fieldset>","</legend>","</script>",
 "</template>","</canvas>","</ruby>","</rb>","</rt>","</rtc>","</rp>","?>","[removed]","type=");
    //var_dump($form['sigla']);
    $ban=0;




    foreach ($form as $f) {

      $f1=str_replace(" ","",$f);
      $aux = strtolower($f1);
      $aux_aux = "";
      for($i=0;$i<strlen($aux);$i++){

        for($j=0;$j<14;$j++){
          if(($i+$j)<strlen($aux)){
            $aux_aux.=  $aux[$i+$j];
          }else{
          }

        }
        //echo $aux_aux."<br>";
        if($aux_aux == '<script>' || $aux_aux == '&lt;script&gt;'){
          return 1;
          //echo "lo encontre";
        }else{
          $aux_aux = "";
        }
      }


      foreach ($etiquetashtml as $eti) {
        //echo $eti;
           if(strpos($f1, $eti)===false){
             //return 0;
              }else{
                 echo "$f1 $eti <br>";
              return  1;
                }
      }
    }
    return 0;
    //echo "<br>$ban";
    //die();
  }

}
