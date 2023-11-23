<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
    <head>
        <title>XSL Table</title>
    </head>
    <body>
        <table border="2" bgcolor="pink">
            <tr>
                <th>Name</th>
                <th>SSN</th>
                <th>Age</th>
                <th>Room</th>
                <th>Insurance</th>
                <th>Medallergy</th>
                <th>Medproblem</th>
            </tr>
            <xsl:for-each select="patients/patient">
            <tr>
                <td><xsl:value-of select="name"/></td>
                <td><xsl:value-of select="ssn"/></td>
                <td><xsl:value-of select="age"/></td>
                <td><xsl:value-of select="roomno"/></td>
                <td><xsl:value-of select="insurance"/></td>
                <td><xsl:value-of select="medallergy"/></td>
                <td><xsl:value-of select="medproblem"/></td>
            </tr>
            </xsl:for-each>
        </table>
    </body>
</html>
</xsl:template>
</xsl:stylesheet>