
import java.io.File;
import javax.swing.text.Document;
import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 *
 * @author xp
 */
public class DOM {

    Document doc;

    public int abrir_XML_DOM(File fichero) {

        doc = null;
        //doc representa al árbol DOM
        try {
//Se crea un objeto DocumentBuiderFactory.
            DocumentBuilderFactory factory = DocumentBuilderFactory.newInstance();
//El modelo DOM no debe contemplar los comentarios que tenga el XML.
            factory.setIgnoringComments(true);
//Ignora los espacios en blanco que tenga el documento
            factory.setIgnoringElementContentWhitespace(true);
//Crea un objeto DocumentBuilder para cargar en él la estructura de árbol DOM
//a partir del XML seleccionado.
            DocumentBuilder builder = factory.newDocumentBuilder();
//Interpreta (parsear) el documento XML (File) y genera el DOM equivalente.
            doc = (Document) builder.parse(fichero);
//Ahora doc apunta al árbol DOM listo para ser recorrido.
            return 0;
        } catch (Exception e) {
            e.printStackTrace();
            return -1;
        }
    }
}
