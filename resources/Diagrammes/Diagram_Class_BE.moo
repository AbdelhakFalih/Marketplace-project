<?xml version="1.0" encoding="UTF-8"?>
<?PowerDesigner AppLocale="UTF16" ID="{AA5D289F-5D21-4DC3-AF52-B9AE8CECCD5C}" Label="" LastModificationDate="1752576054" Name="Diagram_Class_BE" Objects="112" Symbols="20" Target="Java 1.x" TargetLink="Reference" Type="{18112060-1A4B-11D1-83D9-444553540000}" signature="CLD_OBJECT_MODEL" version="15.1.0.2850"?>
<!-- Veuillez ne pas modifier ce fichier -->

<Model xmlns:a="attribute" xmlns:c="collection" xmlns:o="object">

<o:RootObject Id="o1">
<c:Children>
<o:Model Id="o2">
<a:ObjectID>AA5D289F-5D21-4DC3-AF52-B9AE8CECCD5C</a:ObjectID>
<a:Name>Diagram_Class_BE</a:Name>
<a:Code>Diagram_Class_BE</a:Code>
<a:CreationDate>1752572618</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572618</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:PackageOptionsText>[FolderOptions]

[FolderOptions\Class Diagram Objects]
GenerationCheckModel=Yes
GenerationPath=
GenerationOptions=
GenerationTasks=
GenerationTargets=
GenerationSelections=</a:PackageOptionsText>
<a:ModelOptionsText>[ModelOptions]

[ModelOptions\Cld]
CaseSensitive=Yes
DisplayName=Yes
EnableTrans=Yes
EnableRequirements=No
ShowClss=No
DeftAttr=int
DeftMthd=int
DeftParm=int
DeftCont=java.util.Collection
DomnDttp=Yes
DomnChck=No
DomnRule=No
SupportDelay=No
PreviewEditable=Yes
AutoRealize=No
DttpFullName=Yes
DeftClssAttrVisi=private
VBNetPreprocessingSymbols=
CSharpPreprocessingSymbols=

[ModelOptions\Cld\NamingOptionsTemplates]

[ModelOptions\Cld\ClssNamingOptions]

[ModelOptions\Cld\ClssNamingOptions\CLDPCKG]

[ModelOptions\Cld\ClssNamingOptions\CLDPCKG\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDPCKG\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDDOMN]

[ModelOptions\Cld\ClssNamingOptions\CLDDOMN\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDDOMN\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDCLASS]

[ModelOptions\Cld\ClssNamingOptions\CLDCLASS\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,FirstUpperChar)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDCLASS\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDINTF]

[ModelOptions\Cld\ClssNamingOptions\CLDINTF\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,FirstUpperChar)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDINTF\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDACTR]

[ModelOptions\Cld\ClssNamingOptions\UCDACTR\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDACTR\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDUCAS]

[ModelOptions\Cld\ClssNamingOptions\UCDUCAS\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDUCAS\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDOBJT]

[ModelOptions\Cld\ClssNamingOptions\SQDOBJT\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDOBJT\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDMSSG]

[ModelOptions\Cld\ClssNamingOptions\SQDMSSG\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDMSSG\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CPDCOMP]

[ModelOptions\Cld\ClssNamingOptions\CPDCOMP\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,FirstUpperChar)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CPDCOMP\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDATTR]

[ModelOptions\Cld\ClssNamingOptions\CLDATTR\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDATTR\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDMETHOD]

[ModelOptions\Cld\ClssNamingOptions\CLDMETHOD\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDMETHOD\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDPARM]

[ModelOptions\Cld\ClssNamingOptions\CLDPARM\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDPARM\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPORT]

[ModelOptions\Cld\ClssNamingOptions\OOMPORT\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPORT\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPART]

[ModelOptions\Cld\ClssNamingOptions\OOMPART\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPART\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDASSC]

[ModelOptions\Cld\ClssNamingOptions\CLDASSC\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDASSC\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDASSC]

[ModelOptions\Cld\ClssNamingOptions\UCDASSC\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDASSC\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\GNRLLINK]

[ModelOptions\Cld\ClssNamingOptions\GNRLLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\GNRLLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RQLINK]

[ModelOptions\Cld\ClssNamingOptions\RQLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RQLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RLZSLINK]

[ModelOptions\Cld\ClssNamingOptions\RLZSLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RLZSLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DEPDLINK]

[ModelOptions\Cld\ClssNamingOptions\DEPDLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DEPDLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMACTV]

[ModelOptions\Cld\ClssNamingOptions\OOMACTV\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMACTV\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\ACDOBST]

[ModelOptions\Cld\ClssNamingOptions\ACDOBST\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\ACDOBST\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\STAT]

[ModelOptions\Cld\ClssNamingOptions\STAT\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\STAT\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDNODE]

[ModelOptions\Cld\ClssNamingOptions\DPDNODE\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDNODE\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDCMPI]

[ModelOptions\Cld\ClssNamingOptions\DPDCMPI\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDCMPI\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDASSC]

[ModelOptions\Cld\ClssNamingOptions\DPDASSC\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDASSC\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMVAR]

[ModelOptions\Cld\ClssNamingOptions\OOMVAR\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMVAR\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FILO]

[ModelOptions\Cld\ClssNamingOptions\FILO\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=&quot;\/:*?&lt;&gt;|&quot;
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FILO\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_. &quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMEOBJ]

[ModelOptions\Cld\ClssNamingOptions\FRMEOBJ\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMEOBJ\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMELNK]

[ModelOptions\Cld\ClssNamingOptions\FRMELNK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMELNK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DefaultClass]

[ModelOptions\Cld\ClssNamingOptions\DefaultClass\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DefaultClass\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Generate]

[ModelOptions\Generate\Cdm]
CheckModel=Yes
SaveLinks=Yes
NameToCode=No
Notation=2

[ModelOptions\Generate\Pdm]
CheckModel=Yes
SaveLinks=Yes
ORMapping=No
NameToCode=No
BuildTrgr=No
TablePrefix=
RefrUpdRule=RESTRICT
RefrDelRule=RESTRICT
IndxPKName=%TABLE%_PK
IndxAKName=%TABLE%_AK
IndxFKName=%REFR%_FK
IndxThreshold=
ColnFKName=%.3:PARENT%_%COLUMN%
ColnFKNameUse=No

[ModelOptions\Generate\Xsm]
CheckModel=Yes
SaveLinks=Yes
ORMapping=No
NameToCode=No</a:ModelOptionsText>
<c:ObjectLanguage>
<o:Shortcut Id="o3">
<a:ObjectID>0235CD7F-D5DD-476D-ABA8-01B04C12CECF</a:ObjectID>
<a:Name>Java 1.x</a:Name>
<a:Code>Java</a:Code>
<a:CreationDate>1752572618</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572618</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:TargetStereotype/>
<a:TargetID>D824A738-E160-11D2-B693-0008C7EA924D</a:TargetID>
<a:TargetClassID>1811206C-1A4B-11D1-83D9-444553540000</a:TargetClassID>
</o:Shortcut>
</c:ObjectLanguage>
<c:ExtendedModelDefinitions>
<o:Shortcut Id="o4">
<a:ObjectID>D0DBB57E-F98D-4FB1-A16C-47A52854A280</a:ObjectID>
<a:Name>WSDL for Java</a:Name>
<a:Code>WSDLJava</a:Code>
<a:CreationDate>1752572618</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572618</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:TargetStereotype/>
<a:TargetID>C8F5F7B2-CF9D-4E98-8301-959BB6E86C8A</a:TargetID>
<a:TargetClassID>186C8AC3-D3DC-11D3-881C-00508B03C75C</a:TargetClassID>
</o:Shortcut>
</c:ExtendedModelDefinitions>
<c:ClassDiagrams>
<o:ClassDiagram Id="o5">
<a:ObjectID>DAF13263-16D1-476A-91A7-E202BC4566FD</a:ObjectID>
<a:Name>DiagrammeClasses_1</a:Name>
<a:Code>DiagrammeClasses_1</a:Code>
<a:CreationDate>1752572599</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572599</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DisplayPreferences>[DisplayPreferences]

[DisplayPreferences\CLD]

[DisplayPreferences\General]
Adjust to text=Yes
Snap Grid=No
Constrain Labels=Yes
Display Grid=No
Show Page Delimiter=Yes
Grid size=0
Graphic unit=2
Window color=255, 255, 255
Background image=
Background mode=8
Watermark image=
Watermark mode=8
Show watermark on screen=No
Gradient mode=0
Gradient end color=255, 255, 255
Show Swimlane=No
SwimlaneVert=Yes
TreeVert=No
CompDark=0

[DisplayPreferences\Object]
Mode=0
Trunc Length=80
Word Length=80
Word Text=!&quot;&quot;#$%&amp;&#39;()*+,-./:;&lt;=&gt;?@[\]^_`{|}~
Shortcut IntIcon=Yes
Shortcut IntLoct=Yes
Shortcut IntFullPath=No
Shortcut IntLastPackage=Yes
Shortcut ExtIcon=Yes
Shortcut ExtLoct=No
Shortcut ExtFullPath=No
Shortcut ExtLastPackage=Yes
Shortcut ExtIncludeModl=Yes
EObjShowStrn=Yes
ExtendedObject.Comment=No
ExtendedObject.IconPicture=No
ExtendedObject_SymbolLayout=
ELnkShowStrn=Yes
ELnkShowName=Yes
ExtendedLink_SymbolLayout=
FileObject.Stereotype=No
FileObject.DisplayName=Yes
FileObject.LocationOrName=No
FileObject.IconPicture=No
FileObject.IconMode=Yes
FileObject_SymbolLayout=
PckgShowStrn=Yes
Package.Comment=No
Package.IconPicture=No
Package_SymbolLayout=
Display Model Version=Yes
Class.IconPicture=No
Class_SymbolLayout=
Interface.IconPicture=No
Interface_SymbolLayout=
Port.IconPicture=No
Port_SymbolLayout=
ClssShowSttr=Yes
Class.Comment=No
ClssShowCntr=Yes
ClssShowAttr=Yes
ClssAttrTrun=No
ClssAttrMax=3
ClssShowMthd=Yes
ClssMthdTrun=No
ClssMthdMax=3
ClssShowInnr=Yes
IntfShowSttr=Yes
Interface.Comment=No
IntfShowAttr=Yes
IntfAttrTrun=No
IntfAttrMax=3
IntfShowMthd=Yes
IntfMthdTrun=No
IntfMthdMax=3
IntfShowCntr=Yes
IntfShowInnr=Yes
PortShowName=Yes
PortShowType=No
PortShowMult=No
AttrShowVisi=Yes
AttrVisiFmt=1
AttrShowStrn=Yes
AttrShowDttp=Yes
AttrShowDomn=No
AttrShowInit=Yes
MthdShowVisi=Yes
MthdVisiFmt=1
MthdShowStrn=Yes
MthdShowRttp=Yes
MthdShowParm=Yes
AsscShowName=No
AsscShowCntr=Yes
AsscShowRole=Yes
AsscShowOrdr=Yes
AsscShowMult=Yes
AsscMultStr=Yes
AsscShowStrn=No
GnrlShowName=No
GnrlShowStrn=Yes
GnrlShowCntr=Yes
RlzsShowName=No
RlzsShowStrn=Yes
RlzsShowCntr=Yes
DepdShowName=No
DepdShowStrn=Yes
DepdShowCntr=Yes
RqlkShowName=No
RqlkShowStrn=Yes
RqlkShowCntr=Yes

[DisplayPreferences\Symbol]

[DisplayPreferences\Symbol\FRMEOBJ]
STRNFont=Arial,8,N
STRNFont color=0, 0, 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
LABLFont=Arial,8,N
LABLFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=6000
Height=2000
Brush color=255 255 255
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=64
Brush gradient color=192 192 192
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 255 128 128
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\FRMELNK]
CENTERFont=Arial,8,N
CENTERFont color=0, 0, 0
Line style=2
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\FILO]
OBJSTRNFont=Arial,8,N
OBJSTRNFont color=0, 0, 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
LCNMFont=Arial,8,N
LCNMFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=Yes
Keep center=Yes
Keep size=No
Width=2400
Height=2400
Brush color=255 255 255
Fill Color=No
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 0 0 255
Shadow color=192 192 192
Shadow=-1

[DisplayPreferences\Symbol\CLDPCKG]
STRNFont=Arial,8,N
STRNFont color=0 0 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
LABLFont=Arial,8,N
LABLFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=255 255 192
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 178 178 178
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\CLDCLASS]
STRNFont=Arial,8,N
STRNFont color=0 0 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
CNTRFont=Arial,8,N
CNTRFont color=0 0 0
AttributesFont=Arial,8,N
AttributesFont color=0 0 0
ClassPrimaryAttributeFont=Arial,8,U
ClassPrimaryAttributeFont color=0 0 0
OperationsFont=Arial,8,N
OperationsFont color=0 0 0
InnerClassifiersFont=Arial,8,N
InnerClassifiersFont color=0 0 0
LABLFont=Arial,8,N
LABLFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=233 202 131
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 0 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\CLDINTF]
STRNFont=Arial,8,N
STRNFont color=0 0 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
CNTRFont=Arial,8,N
CNTRFont color=0 0 0
AttributesFont=Arial,8,N
AttributesFont color=0 0 0
OperationsFont=Arial,8,N
OperationsFont color=0 0 0
InnerClassifiersFont=Arial,8,N
InnerClassifiersFont color=0 0 0
LABLFont=Arial,8,N
LABLFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=205 156 156
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 0 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\OOMPORT]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
AutoAdjustToText=No
Keep aspect=No
Keep center=No
Keep size=No
Width=825
Height=800
Brush color=250 241 211
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 64 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\CLDASSC]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
MULAFont=Arial,8,N
MULAFont color=0 0 0
Line style=2
Pen=1 0 128 0 64
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\INNERLINK]
Line style=2
Pen=1 0 128 0 64
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\CLDACLK]
Line style=2
Pen=2 0 128 0 64
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\GNRLLINK]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
Line style=2
Pen=1 0 128 0 64
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\RLZSLINK]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
Line style=2
Pen=3 0 128 0 64
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\RQLINK]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
Line style=2
Pen=1 0 128 0 64
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\DEPDLINK]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
Line style=2
Pen=2 0 128 0 64
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\USRDEPD]
OBJXSTRFont=Arial,8,N
OBJXSTRFont color=0 0 0
Line style=2
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=2 0 128 0 64
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\Free Symbol]
Free TextFont=Arial,8,N
Free TextFont color=0 0 0
Line style=2
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 64 0
Shadow color=192 192 192
Shadow=0</a:DisplayPreferences>
<a:PaperSize>(8268, 11693)</a:PaperSize>
<a:PageMargins>((315,354), (433,354))</a:PageMargins>
<a:PageOrientation>1</a:PageOrientation>
<a:PaperSource>15</a:PaperSource>
<a:Flags>3</a:Flags>
<c:Symbols>
<o:GeneralizationSymbol Id="o6">
<a:ModificationDate>1752576000</a:ModificationDate>
<a:Rect>((-30041,21879), (-549,41599))</a:Rect>
<a:ListOfPoints>((-30041,21879),(-30041,41599),(-549,41599))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>7</a:ArrowStyle>
<a:LineColor>4194432</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 255 Palatino Linotype,14,B</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o7"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o8"/>
</c:DestinationSymbol>
<c:Object>
<o:Generalization Ref="o9"/>
</c:Object>
</o:GeneralizationSymbol>
<o:GeneralizationSymbol Id="o10">
<a:ModificationDate>1752576036</a:ModificationDate>
<a:Rect>((-748,41884), (50055,42884))</a:Rect>
<a:ListOfPoints>((50055,42269),(24644,42269),(24644,42498),(-748,42498))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>7</a:ArrowStyle>
<a:LineColor>4194432</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 255 Palatino Linotype,14,B</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o11"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o8"/>
</c:DestinationSymbol>
<c:Object>
<o:Generalization Ref="o12"/>
</c:Object>
</o:GeneralizationSymbol>
<o:AssociationSymbol Id="o13">
<a:ModificationDate>1752576024</a:ModificationDate>
<a:Rect>((3973,43067), (57720,49378))</a:Rect>
<a:ListOfPoints>((3973,43067),(11439,43067),(11439,49378),(57720,49378))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>4194432</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 32768 Palatino Linotype,14,B
MULA 32768 Palatino Linotype,14,B</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o8"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o14"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o15"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o16">
<a:ModificationDate>1752576054</a:ModificationDate>
<a:Rect>((-12289,25115), (1647,39303))</a:Rect>
<a:ListOfPoints>((1647,39303),(1647,32150),(-5089,32150),(-5089,25115))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>4194432</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 32768 Palatino Linotype,14,B
MULA 32768 Palatino Linotype,14,B</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o8"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o17"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o18"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o19">
<a:ModificationDate>1752576037</a:ModificationDate>
<a:Rect>((4976,34959), (22536,43597))</a:Rect>
<a:ListOfPoints>((22536,34959),(22536,41599),(4976,41599))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>4194432</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 32768 Palatino Linotype,14,B
MULA 32768 Palatino Linotype,14,B</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o20"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o8"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o21"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o22">
<a:ModificationDate>1752576051</a:ModificationDate>
<a:DestinationTextOffset>(1025, 2184)</a:DestinationTextOffset>
<a:Rect>((11668,16145), (41625,21822))</a:Rect>
<a:ListOfPoints>((41625,16145),(22951,16145),(22951,18639),(11668,18639))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>4194432</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 32768 Palatino Linotype,14,B
MULA 32768 Palatino Linotype,14,B</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o23"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o24"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o25"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o26">
<a:ModificationDate>1752576048</a:ModificationDate>
<a:DestinationTextOffset>(3622, -487)</a:DestinationTextOffset>
<a:Rect>((22664,19889), (40258,32197))</a:Rect>
<a:ListOfPoints>((40258,19889),(22664,19889),(22664,32197))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>4194432</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 32768 Palatino Linotype,14,B
MULA 32768 Palatino Linotype,14,B</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o23"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o20"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o27"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o28">
<a:ModificationDate>1752576021</a:ModificationDate>
<a:Rect>((-42272,45314), (-21318,53047))</a:Rect>
<a:ListOfPoints>((-21318,51371),(-38148,51371),(-38148,45314))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>4194432</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 32768 Palatino Linotype,14,B
MULA 32768 Palatino Linotype,14,B</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o29"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o30"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o31"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o32">
<a:ModificationDate>1752576013</a:ModificationDate>
<a:Rect>((-22888,38414), (8108,51470))</a:Rect>
<a:ListOfPoints>((-22888,48701),(8108,48701),(8108,38414))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>4194432</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 32768 Palatino Linotype,14,B
MULA 32768 Palatino Linotype,14,B</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o29"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o8"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o33"/>
</c:Object>
</o:AssociationSymbol>
<o:ClassSymbol Id="o14">
<a:ModificationDate>1752576024</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((42297,45516), (58337,53238))</a:Rect>
<a:LineColor>128</a:LineColor>
<a:FillColor>8637161</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 10485760 Palatino Linotype,12,B
CNTR 0 Arial,11,N
Attributes 0 Palatino Linotype,10,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Palatino Linotype,10,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,12,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o34"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o17">
<a:ModificationDate>1752576054</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-12374,21253), (2198,28975))</a:Rect>
<a:LineColor>128</a:LineColor>
<a:FillColor>8637161</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 10485760 Palatino Linotype,12,B
CNTR 0 Arial,11,N
Attributes 0 Palatino Linotype,10,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Palatino Linotype,10,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,12,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o35"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o30">
<a:ModificationDate>1752575997</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-45704,40777), (-30592,49849))</a:Rect>
<a:LineColor>128</a:LineColor>
<a:FillColor>8637161</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 10485760 Palatino Linotype,12,B
CNTR 0 Arial,11,N
Attributes 0 Palatino Linotype,10,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Palatino Linotype,10,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,12,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o36"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o8">
<a:ModificationDate>1752576000</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-11956,34925), (10856,48272))</a:Rect>
<a:LineColor>128</a:LineColor>
<a:FillColor>8637161</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 10485760 Palatino Linotype,12,B
CNTR 0 Arial,11,N
Attributes 0 Palatino Linotype,10,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Palatino Linotype,10,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,12,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o37"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o7">
<a:ModificationDate>1752575988</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-45657,10480), (-14425,33277))</a:Rect>
<a:LineColor>128</a:LineColor>
<a:FillColor>8637161</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 10485760 Palatino Linotype,12,B
CNTR 0 Arial,11,N
Attributes 0 Palatino Linotype,10,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Palatino Linotype,10,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,12,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o38"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o11">
<a:ModificationDate>1752576036</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((34739,23914), (65971,44010))</a:Rect>
<a:LineColor>128</a:LineColor>
<a:FillColor>8637161</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 10485760 Palatino Linotype,12,B
CNTR 0 Arial,11,N
Attributes 0 Palatino Linotype,10,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Palatino Linotype,10,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,12,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o39"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o24">
<a:ModificationDate>1752576051</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((3377,11601), (19957,24948))</a:Rect>
<a:LineColor>128</a:LineColor>
<a:FillColor>8637161</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 10485760 Palatino Linotype,12,B
CNTR 0 Arial,11,N
Attributes 0 Palatino Linotype,10,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Palatino Linotype,10,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,12,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o40"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o20">
<a:ModificationDate>1752576037</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((15945,30986), (29127,38932))</a:Rect>
<a:LineColor>128</a:LineColor>
<a:FillColor>8637161</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 10485760 Palatino Linotype,12,B
CNTR 0 Arial,11,N
Attributes 0 Palatino Linotype,10,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Palatino Linotype,10,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,12,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o41"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o23">
<a:ModificationDate>1752576043</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((32833,11188), (50417,21834))</a:Rect>
<a:LineColor>128</a:LineColor>
<a:FillColor>8637161</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 10485760 Palatino Linotype,12,B
CNTR 0 Arial,11,N
Attributes 0 Palatino Linotype,10,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Palatino Linotype,10,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,12,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o42"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o43">
<a:ModificationDate>1752573348</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-87826,-76770), (-62466,-67474))</a:Rect>
<a:LineColor>128</a:LineColor>
<a:FillColor>8637161</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 10485760 Palatino Linotype,12,B
CNTR 0 Arial,11,N
Attributes 0 Palatino Linotype,10,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Palatino Linotype,10,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,12,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o44"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o29">
<a:ModificationDate>1752576013</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-29455,44234), (-13107,53530))</a:Rect>
<a:LineColor>128</a:LineColor>
<a:FillColor>8637161</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 10485760 Palatino Linotype,12,B
CNTR 0 Arial,11,N
Attributes 0 Palatino Linotype,10,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Palatino Linotype,10,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,12,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o45"/>
</c:Object>
</o:ClassSymbol>
</c:Symbols>
</o:ClassDiagram>
</c:ClassDiagrams>
<c:DefaultDiagram>
<o:ClassDiagram Ref="o5"/>
</c:DefaultDiagram>
<c:Classes>
<o:Class Id="o34">
<a:ObjectID>396F2FF7-82A7-4AF0-8798-F46E7845818D</a:ObjectID>
<a:Name>UserType</a:Name>
<a:Code>UserType</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572692</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:Stereotype>Enum</a:Stereotype>
<a:UseParentNamespace>0</a:UseParentNamespace>
<a:Visibility>*</a:Visibility>
<a:Classifier.Header> </a:Classifier.Header>
<a:Imports>import java.util.ArrayList;
import java.util.Date;
import java.util.List;
</a:Imports>
<c:Attributes>
<o:Attribute Id="o46">
<a:ObjectID>4A435BAF-3292-4193-A32A-54AB59E1D35B</a:ObjectID>
<a:Name>Cooperatif</a:Name>
<a:Code>Cooperatif</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>EnumConstant</a:DataType>
<a:Static>1</a:Static>
<a:Frozen>F</a:Frozen>
</o:Attribute>
<o:Attribute Id="o47">
<a:ObjectID>EC2A4146-C95D-41BB-BCB0-ABF04A6DE095</a:ObjectID>
<a:Name>Commercant</a:Name>
<a:Code>Commercant</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>EnumConstant</a:DataType>
<a:Static>1</a:Static>
<a:Frozen>F</a:Frozen>
</o:Attribute>
</c:Attributes>
</o:Class>
<o:Class Id="o35">
<a:ObjectID>82ACCECE-3C98-4D69-8357-56C90637C0FD</a:ObjectID>
<a:Name>ProfileStatus</a:Name>
<a:Code>ProfileStatus</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572717</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:Stereotype>Enum</a:Stereotype>
<a:UseParentNamespace>0</a:UseParentNamespace>
<a:Visibility>*</a:Visibility>
<a:Classifier.Header> </a:Classifier.Header>
<a:Imports>import java.util.ArrayList;
import java.util.Date;
import java.util.List;
</a:Imports>
<c:Attributes>
<o:Attribute Id="o48">
<a:ObjectID>181E3189-9AA7-441C-8ACA-69981D972315</a:ObjectID>
<a:Name>EnAttente</a:Name>
<a:Code>EnAttente</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>EnumConstant</a:DataType>
<a:Static>1</a:Static>
<a:Frozen>F</a:Frozen>
</o:Attribute>
<o:Attribute Id="o49">
<a:ObjectID>EDEC623A-FD11-4696-9535-00A083B0CD32</a:ObjectID>
<a:Name>Valide</a:Name>
<a:Code>Valide</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>EnumConstant</a:DataType>
<a:Static>1</a:Static>
<a:Frozen>F</a:Frozen>
</o:Attribute>
</c:Attributes>
</o:Class>
<o:Class Id="o36">
<a:ObjectID>E6947FFC-0A94-4FEE-BAB8-6208C156F649</a:ObjectID>
<a:Name>NotificationType</a:Name>
<a:Code>NotificationType</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572803</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:Stereotype>Enum</a:Stereotype>
<a:UseParentNamespace>0</a:UseParentNamespace>
<a:Visibility>*</a:Visibility>
<a:Classifier.Header> </a:Classifier.Header>
<a:Imports>import java.util.ArrayList;
import java.util.Date;
import java.util.List;
</a:Imports>
<c:Attributes>
<o:Attribute Id="o50">
<a:ObjectID>0444592D-C6BA-425A-BAAE-55F594C58C2B</a:ObjectID>
<a:Name>Email</a:Name>
<a:Code>Email</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>EnumConstant</a:DataType>
<a:Static>1</a:Static>
<a:Frozen>F</a:Frozen>
</o:Attribute>
<o:Attribute Id="o51">
<a:ObjectID>C3D75FFD-4184-4D23-9D22-504B0BD61590</a:ObjectID>
<a:Name>SMS</a:Name>
<a:Code>SMS</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>EnumConstant</a:DataType>
<a:Static>1</a:Static>
<a:Frozen>F</a:Frozen>
</o:Attribute>
<o:Attribute Id="o52">
<a:ObjectID>04D96188-0DCF-4C20-A28D-4C0CD2EE1E56</a:ObjectID>
<a:Name>WhatsApp</a:Name>
<a:Code>WhatsApp</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>EnumConstant</a:DataType>
<a:Static>1</a:Static>
<a:Frozen>F</a:Frozen>
</o:Attribute>
</c:Attributes>
</o:Class>
<o:Class Id="o37">
<a:ObjectID>A3E9B251-142B-4B65-9A5B-659EB2651D2E</a:ObjectID>
<a:Name>Utilisateur</a:Name>
<a:Code>Utilisateur</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572865</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<a:Visibility>*</a:Visibility>
<a:Classifier.Header> </a:Classifier.Header>
<a:Imports>import java.util.ArrayList;
import java.util.Date;
import java.util.List;
</a:Imports>
<c:Attributes>
<o:Attribute Id="o53">
<a:ObjectID>00CBE292-88AB-4F05-850F-7A0A1350A3B8</a:ObjectID>
<a:Name>id</a:Name>
<a:Code>id</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o54">
<a:ObjectID>A4B19D34-A842-4035-B470-162E5C0668B9</a:ObjectID>
<a:Name>email</a:Name>
<a:Code>email</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o55">
<a:ObjectID>BBED2E59-F9DF-4B55-A03E-DFFD039EC06C</a:ObjectID>
<a:Name>motDePasse</a:Name>
<a:Code>motDePasse</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o56">
<a:ObjectID>E06063A8-B0A4-4881-99DA-63CA09F2C9C8</a:ObjectID>
<a:Name>type</a:Name>
<a:Code>type</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>UserType</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
<c:ObjectDataType>
<o:Class Ref="o34"/>
</c:ObjectDataType>
</o:Attribute>
<o:Attribute Id="o57">
<a:ObjectID>D5835F29-35B4-4284-A4A8-3AF87B56C901</a:ObjectID>
<a:Name>etatProfil</a:Name>
<a:Code>etatProfil</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>ProfileStatus</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
<c:ObjectDataType>
<o:Class Ref="o35"/>
</c:ObjectDataType>
</o:Attribute>
</c:Attributes>
<c:Operations>
<o:Operation Id="o58">
<a:ObjectID>53B069A1-5038-4265-8EB3-510AD130379C</a:ObjectID>
<a:Name>creerCompte</a:Name>
<a:Code>creerCompte</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>void</a:ReturnType>
<a:TemplateBody>{}
</a:TemplateBody>
</o:Operation>
<o:Operation Id="o59">
<a:ObjectID>28DDE139-AF09-41DE-AD3A-7D0357AC100A</a:ObjectID>
<a:Name>completerProfil</a:Name>
<a:Code>completerProfil</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>void</a:ReturnType>
<a:TemplateBody>{}
</a:TemplateBody>
</o:Operation>
<o:Operation Id="o60">
<a:ObjectID>AA4453F9-3491-48C4-8E5F-8070A32ADCBD</a:ObjectID>
<a:Name>recevoirNotification</a:Name>
<a:Code>recevoirNotification</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>void</a:ReturnType>
<a:TemplateBody>{}
</a:TemplateBody>
<c:Parameters>
<o:Parameter Id="o61">
<a:ObjectID>532753A3-80D4-4B09-A8D2-2F96072FAD7C</a:ObjectID>
<a:Name>preference</a:Name>
<a:Code>preference</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:Parameter.DataType>String</a:Parameter.DataType>
</o:Parameter>
</c:Parameters>
</o:Operation>
</c:Operations>
</o:Class>
<o:Class Id="o38">
<a:ObjectID>9D321BEB-FA82-4668-BF2F-46CAAE6CCD0B</a:ObjectID>
<a:Name>Cooperatif</a:Name>
<a:Code>Cooperatif</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572676</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<a:Visibility>*</a:Visibility>
<a:Classifier.Header> </a:Classifier.Header>
<a:Imports>import java.util.ArrayList;
import java.util.Date;
import java.util.List;
</a:Imports>
<c:Attributes>
<o:Attribute Id="o62">
<a:ObjectID>48BAE5BA-1677-4114-AE32-69D5095640E5</a:ObjectID>
<a:Name>nom</a:Name>
<a:Code>nom</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o63">
<a:ObjectID>EF2B28A1-0064-4D06-BF06-37347E3F8C94</a:ObjectID>
<a:Name>localisation</a:Name>
<a:Code>localisation</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o64">
<a:ObjectID>D53D8690-423F-4634-91DE-5A15473130BE</a:ObjectID>
<a:Name>prefecture</a:Name>
<a:Code>prefecture</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o65">
<a:ObjectID>19078072-F057-4A35-A1F5-C4916D0C5F2E</a:ObjectID>
<a:Name>activite</a:Name>
<a:Code>activite</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o66">
<a:ObjectID>022B51A8-24C7-4BB7-915F-B8E96EED83A3</a:ObjectID>
<a:Name>produitPrincipal</a:Name>
<a:Code>produitPrincipal</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o67">
<a:ObjectID>DE76996E-4AFF-49B7-9C85-F38A73A26097</a:ObjectID>
<a:Name>nomPresident</a:Name>
<a:Code>nomPresident</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o68">
<a:ObjectID>2E04B56A-2D23-42C1-A7C9-5A5FAF9CE07C</a:ObjectID>
<a:Name>numeroUnique</a:Name>
<a:Code>numeroUnique</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o69">
<a:ObjectID>D78AB2DA-24C7-4115-BBBA-55F8991A322D</a:ObjectID>
<a:Name>dateCreation</a:Name>
<a:Code>dateCreation</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>Date</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o70">
<a:ObjectID>069D8690-CEDE-4702-AA5C-A9A9C66F8E03</a:ObjectID>
<a:Name>points</a:Name>
<a:Code>points</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o71">
<a:ObjectID>EFFBEC39-E11F-4881-84DA-5A226BFAEFAC</a:ObjectID>
<a:Name>offres</a:Name>
<a:Code>offres</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>List&lt;OffreProduit&gt;</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
<a:InitialValue>new ArrayList&lt;&gt;()</a:InitialValue>
</o:Attribute>
<o:Attribute Id="o72">
<a:ObjectID>6C25B88E-F0FB-47D0-B215-93ECE1C09600</a:ObjectID>
<a:Name>demandes</a:Name>
<a:Code>demandes</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>List&lt;DemandeProduit&gt;</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
<a:InitialValue>new ArrayList&lt;&gt;()</a:InitialValue>
</o:Attribute>
</c:Attributes>
<c:Operations>
<o:Operation Id="o73">
<a:ObjectID>7227F475-8F88-48F0-9DC4-F2261FB91D38</a:ObjectID>
<a:Name>publierOffre</a:Name>
<a:Code>publierOffre</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>void</a:ReturnType>
<a:TemplateBody>{}
</a:TemplateBody>
</o:Operation>
<o:Operation Id="o74">
<a:ObjectID>5DB3ADD6-4809-4639-940E-5BAE3B19E8C9</a:ObjectID>
<a:Name>publierDemande</a:Name>
<a:Code>publierDemande</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>void</a:ReturnType>
<a:TemplateBody>{}
</a:TemplateBody>
</o:Operation>
<o:Operation Id="o75">
<a:ObjectID>1534B26B-6043-4594-B142-9014FA935CCB</a:ObjectID>
<a:Name>repondreDemande</a:Name>
<a:Code>repondreDemande</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>void</a:ReturnType>
<a:TemplateBody>{}
</a:TemplateBody>
</o:Operation>
<o:Operation Id="o76">
<a:ObjectID>EE7036D4-330B-4B08-8495-41B675F4FB3A</a:ObjectID>
<a:Name>voirNombreInterets</a:Name>
<a:Code>voirNombreInterets</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>void</a:ReturnType>
<a:TemplateBody>{}
</a:TemplateBody>
</o:Operation>
</c:Operations>
</o:Class>
<o:Class Id="o39">
<a:ObjectID>98D25F68-0926-4190-AE95-83512F204099</a:ObjectID>
<a:Name>Commercant</a:Name>
<a:Code>Commercant</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572717</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<a:Visibility>*</a:Visibility>
<a:Classifier.Header> </a:Classifier.Header>
<a:Imports>import java.util.ArrayList;
import java.util.Date;
import java.util.List;
</a:Imports>
<c:Attributes>
<o:Attribute Id="o77">
<a:ObjectID>85CCEA07-C4DA-44F6-8347-4002860102C3</a:ObjectID>
<a:Name>nom</a:Name>
<a:Code>nom</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o78">
<a:ObjectID>BA6D938D-AE87-4FCB-81D8-F0C80B409F8C</a:ObjectID>
<a:Name>localisation</a:Name>
<a:Code>localisation</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o79">
<a:ObjectID>82A29DB6-A8C6-455D-BBC1-E90C2D4799E8</a:ObjectID>
<a:Name>prefecture</a:Name>
<a:Code>prefecture</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o80">
<a:ObjectID>684239A1-9620-451D-9513-60A306E79A7A</a:ObjectID>
<a:Name>activite</a:Name>
<a:Code>activite</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o81">
<a:ObjectID>06CD6034-77E0-4625-872C-D141ED049A1A</a:ObjectID>
<a:Name>produitPrincipal</a:Name>
<a:Code>produitPrincipal</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o82">
<a:ObjectID>4DCDCB76-4D4F-428E-8973-670DDBBA8AE4</a:ObjectID>
<a:Name>numeroPatente</a:Name>
<a:Code>numeroPatente</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o83">
<a:ObjectID>2C57E3B5-7265-4281-86DF-2C94FACC5B59</a:ObjectID>
<a:Name>points</a:Name>
<a:Code>points</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o84">
<a:ObjectID>875B2F73-3DEC-430D-9D44-B8659B43294F</a:ObjectID>
<a:Name>offres</a:Name>
<a:Code>offres</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>List&lt;OffreProduit&gt;</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
<a:InitialValue>new ArrayList&lt;&gt;()</a:InitialValue>
</o:Attribute>
<o:Attribute Id="o85">
<a:ObjectID>63681F69-65DC-4171-9584-0BBC95C58671</a:ObjectID>
<a:Name>demandes</a:Name>
<a:Code>demandes</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>List&lt;DemandeProduit&gt;</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
<a:InitialValue>new ArrayList&lt;&gt;()</a:InitialValue>
</o:Attribute>
</c:Attributes>
<c:Operations>
<o:Operation Id="o86">
<a:ObjectID>DEEF1D66-8C1A-4AB8-838B-2400B3A2135A</a:ObjectID>
<a:Name>publierOffre</a:Name>
<a:Code>publierOffre</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>void</a:ReturnType>
<a:TemplateBody>{}
</a:TemplateBody>
</o:Operation>
<o:Operation Id="o87">
<a:ObjectID>AF3197E2-F005-4682-B23E-6A5130CB860D</a:ObjectID>
<a:Name>publierDemande</a:Name>
<a:Code>publierDemande</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>void</a:ReturnType>
<a:TemplateBody>{}
</a:TemplateBody>
</o:Operation>
<o:Operation Id="o88">
<a:ObjectID>0B5BC4DB-10CB-4396-92D4-643140B28338</a:ObjectID>
<a:Name>repondreDemande</a:Name>
<a:Code>repondreDemande</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>void</a:ReturnType>
<a:TemplateBody>{}
</a:TemplateBody>
</o:Operation>
<o:Operation Id="o89">
<a:ObjectID>B308CA1E-19D4-45CB-B2D1-BE74438536AD</a:ObjectID>
<a:Name>voirNombreInterets</a:Name>
<a:Code>voirNombreInterets</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>void</a:ReturnType>
<a:TemplateBody>{}
</a:TemplateBody>
</o:Operation>
</c:Operations>
</o:Class>
<o:Class Id="o40">
<a:ObjectID>3D232A92-B1BD-4F92-8067-215C81BCC571</a:ObjectID>
<a:Name>OffreProduit</a:Name>
<a:Code>OffreProduit</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572935</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<a:Visibility>*</a:Visibility>
<a:Classifier.Header> </a:Classifier.Header>
<a:Imports>import java.util.ArrayList;
import java.util.Date;
import java.util.List;
</a:Imports>
<c:Attributes>
<o:Attribute Id="o90">
<a:ObjectID>EECD2D3A-384C-47E6-8B12-B811FD992EAE</a:ObjectID>
<a:Name>id</a:Name>
<a:Code>id</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o91">
<a:ObjectID>6830B6DF-1795-4074-A34B-DC15472E3C89</a:ObjectID>
<a:Name>nom</a:Name>
<a:Code>nom</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o92">
<a:ObjectID>461558B4-9E72-428F-B94F-7FB06040FDA3</a:ObjectID>
<a:Name>ficheTechnique</a:Name>
<a:Code>ficheTechnique</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o93">
<a:ObjectID>4FC43109-C627-4210-A707-D230AACADC6D</a:ObjectID>
<a:Name>flyer</a:Name>
<a:Code>flyer</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o94">
<a:ObjectID>FDD85F6B-A5A8-4D95-A247-0A03218238FB</a:ObjectID>
<a:Name>prix</a:Name>
<a:Code>prix</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>float</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o95">
<a:ObjectID>8BB10DF7-22D2-4F53-86C3-5540B2E76D44</a:ObjectID>
<a:Name>optionsLivraison</a:Name>
<a:Code>optionsLivraison</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>List&lt;String&gt;</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o96">
<a:ObjectID>B50A718A-BBD1-40D2-B93A-6AB6B820467B</a:ObjectID>
<a:Name>nombreInterets</a:Name>
<a:Code>nombreInterets</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Operations>
<o:Operation Id="o97">
<a:ObjectID>285AEEB2-DEA1-4F94-A33B-FDF3A475D9C8</a:ObjectID>
<a:Name>incrementerInterets</a:Name>
<a:Code>incrementerInterets</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>void</a:ReturnType>
<a:TemplateBody>{
    this.nombreInterets++;
}
</a:TemplateBody>
</o:Operation>
</c:Operations>
</o:Class>
<o:Class Id="o41">
<a:ObjectID>E3ED91ED-05AD-4CBE-B477-45D69DBA3D5F</a:ObjectID>
<a:Name>DemandeProduit</a:Name>
<a:Code>DemandeProduit</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572928</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<a:Visibility>*</a:Visibility>
<a:Classifier.Header> </a:Classifier.Header>
<a:Imports>import java.util.ArrayList;
import java.util.Date;
import java.util.List;
</a:Imports>
<c:Attributes>
<o:Attribute Id="o98">
<a:ObjectID>8A457ACC-0427-48E9-AAE6-2B2C56BAFAC7</a:ObjectID>
<a:Name>id</a:Name>
<a:Code>id</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o99">
<a:ObjectID>C241D596-1164-40AF-9E4A-C35B13172361</a:ObjectID>
<a:Name>description</a:Name>
<a:Code>description</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o100">
<a:ObjectID>99723916-9E2C-45B3-B97F-C8A6872A56AA</a:ObjectID>
<a:Name>creePar</a:Name>
<a:Code>creePar</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>Utilisateur</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
<c:ObjectDataType>
<o:Class Ref="o37"/>
</c:ObjectDataType>
</o:Attribute>
</c:Attributes>
<c:Operations>
<o:Operation Id="o101">
<a:ObjectID>12D50EFE-34C3-47DC-8E73-4E977A8894F9</a:ObjectID>
<a:Name>repondre</a:Name>
<a:Code>repondre</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>void</a:ReturnType>
<a:TemplateBody>{}
</a:TemplateBody>
</o:Operation>
</c:Operations>
</o:Class>
<o:Class Id="o42">
<a:ObjectID>2A2210C4-1A8A-42DB-BCF1-3B1F18D89E35</a:ObjectID>
<a:Name>Transaction</a:Name>
<a:Code>Transaction</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572928</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<a:Visibility>*</a:Visibility>
<a:Classifier.Header> </a:Classifier.Header>
<a:Imports>import java.util.ArrayList;
import java.util.Date;
import java.util.List;
</a:Imports>
<c:Attributes>
<o:Attribute Id="o102">
<a:ObjectID>291578A0-C994-40A4-894F-AB9DD8CC1898</a:ObjectID>
<a:Name>id</a:Name>
<a:Code>id</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o103">
<a:ObjectID>5C288E37-4E1D-4C88-B24E-362B50EC85C6</a:ObjectID>
<a:Name>offre</a:Name>
<a:Code>offre</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>OffreProduit</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
<c:ObjectDataType>
<o:Class Ref="o40"/>
</c:ObjectDataType>
</o:Attribute>
<o:Attribute Id="o104">
<a:ObjectID>EA65DD12-BF82-4C90-9BFA-8853CAD718AD</a:ObjectID>
<a:Name>demande</a:Name>
<a:Code>demande</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>DemandeProduit</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
<c:ObjectDataType>
<o:Class Ref="o41"/>
</c:ObjectDataType>
</o:Attribute>
<o:Attribute Id="o105">
<a:ObjectID>D645171D-0F16-4F44-9833-E9D65A1DCD05</a:ObjectID>
<a:Name>commission</a:Name>
<a:Code>commission</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>float</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o106">
<a:ObjectID>3351AD55-C016-4607-A571-E39AEE088250</a:ObjectID>
<a:Name>coutLogistique</a:Name>
<a:Code>coutLogistique</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>float</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Operations>
<o:Operation Id="o107">
<a:ObjectID>4C08BF8E-7F20-448E-BA55-2DC1E8B021E7</a:ObjectID>
<a:Name>completerTransaction</a:Name>
<a:Code>completerTransaction</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>void</a:ReturnType>
<a:TemplateBody>{}
</a:TemplateBody>
</o:Operation>
</c:Operations>
</o:Class>
<o:Class Id="o44">
<a:ObjectID>37741149-C2CD-4012-937E-41209C156532</a:ObjectID>
<a:Name>Administrateur</a:Name>
<a:Code>Administrateur</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<a:Visibility>*</a:Visibility>
<a:Classifier.Header> </a:Classifier.Header>
<a:Imports>import java.util.ArrayList;
import java.util.Date;
import java.util.List;
</a:Imports>
<c:Attributes>
<o:Attribute Id="o108">
<a:ObjectID>1C928099-8A54-40F7-93C3-6055E6F5C42C</a:ObjectID>
<a:Name>id</a:Name>
<a:Code>id</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Operations>
<o:Operation Id="o109">
<a:ObjectID>74D9E14E-8922-483F-8278-49D7593C49F8</a:ObjectID>
<a:Name>Administrateur</a:Name>
<a:Code>Administrateur</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:Stereotype>Constructor</a:Stereotype>
<a:TemplateBody>{
    this.id = id;
}
</a:TemplateBody>
<c:Parameters>
<o:Parameter Id="o110">
<a:ObjectID>4540EE65-CA49-4E26-A815-C8E2C4AAD976</a:ObjectID>
<a:Name>id</a:Name>
<a:Code>id</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:Parameter.DataType>String</a:Parameter.DataType>
</o:Parameter>
</c:Parameters>
<c:InfluentObject>
<o:Class Ref="o44"/>
</c:InfluentObject>
</o:Operation>
<o:Operation Id="o111">
<a:ObjectID>E165DD02-191B-4B95-82A1-B097BA8153D6</a:ObjectID>
<a:Name>validerProfil</a:Name>
<a:Code>validerProfil</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>void</a:ReturnType>
<a:TemplateBody>{}
</a:TemplateBody>
</o:Operation>
<o:Operation Id="o112">
<a:ObjectID>567663EA-4CD1-486A-AA36-02914F359CB6</a:ObjectID>
<a:Name>faciliterTransaction</a:Name>
<a:Code>faciliterTransaction</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>void</a:ReturnType>
<a:TemplateBody>{}
</a:TemplateBody>
</o:Operation>
<o:Operation Id="o113">
<a:ObjectID>04D1E5DB-9CF7-45FA-B3BE-070D9E02AFCE</a:ObjectID>
<a:Name>envoyerNotification</a:Name>
<a:Code>envoyerNotification</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>void</a:ReturnType>
<a:TemplateBody>{}
</a:TemplateBody>
</o:Operation>
</c:Operations>
</o:Class>
<o:Class Id="o45">
<a:ObjectID>BFAAAF71-3266-48D4-9891-2E3420886BF4</a:ObjectID>
<a:Name>Notification</a:Name>
<a:Code>Notification</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572803</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<a:Visibility>*</a:Visibility>
<a:Classifier.Header> </a:Classifier.Header>
<a:Imports>import java.util.ArrayList;
import java.util.Date;
import java.util.List;
</a:Imports>
<c:Attributes>
<o:Attribute Id="o114">
<a:ObjectID>45CB870D-2702-43D4-AA89-A844DA17F9B1</a:ObjectID>
<a:Name>id</a:Name>
<a:Code>id</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o115">
<a:ObjectID>88333CC1-8815-48B9-8939-2E88CABC3B4F</a:ObjectID>
<a:Name>type</a:Name>
<a:Code>type</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>NotificationType</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
<c:ObjectDataType>
<o:Class Ref="o36"/>
</c:ObjectDataType>
</o:Attribute>
<o:Attribute Id="o116">
<a:ObjectID>C1A499FC-7270-459F-BE15-47DA9A24C83B</a:ObjectID>
<a:Name>destinataire</a:Name>
<a:Code>destinataire</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>Utilisateur</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
<c:ObjectDataType>
<o:Class Ref="o37"/>
</c:ObjectDataType>
</o:Attribute>
<o:Attribute Id="o117">
<a:ObjectID>8BA43F0A-0121-4554-B07D-04AF87D19CAB</a:ObjectID>
<a:Name>message</a:Name>
<a:Code>message</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Operations>
<o:Operation Id="o118">
<a:ObjectID>64270BDD-9E1A-40C6-8408-F035FE23F58D</a:ObjectID>
<a:Name>envoyer</a:Name>
<a:Code>envoyer</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:ReturnType>void</a:ReturnType>
<a:TemplateBody>{}
</a:TemplateBody>
</o:Operation>
</c:Operations>
</o:Class>
</c:Classes>
<c:Associations>
<o:Association Id="o15">
<a:ObjectID>63B0D1A7-1DC7-4D88-8B68-6038F2E3EA19</a:ObjectID>
<a:Name>Association_1</a:Name>
<a:Code>association1</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:RoleBName>type</a:RoleBName>
<a:RoleBVisibility>-</a:RoleBVisibility>
<a:ExtendedAttributesText>{D824A738-E160-11D2-B693-0008C7EA924D},Java,276={72FA5C48-5524-4DF7-8187-ABB19AB5AF9E},roleAContainer,6=&lt;None&gt;
{F6FFC71C-C472-4261-A710-B0BCC0BF4D58},roleAImplementationClass,6=&lt;None&gt;
{C11C9F66-6453-43A2-8824-6654518CF65A},roleBImplementationClass,6=&lt;None&gt;
{78C31404-0EE5-4FD0-9038-EE396B305F05},roleBContainer,6=&lt;None&gt;

</a:ExtendedAttributesText>
<c:Object1>
<o:Class Ref="o34"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o37"/>
</c:Object2>
<c:RoleBMigratedAttribute>
<o:Attribute Ref="o56"/>
</c:RoleBMigratedAttribute>
</o:Association>
<o:Association Id="o18">
<a:ObjectID>730DACD2-1D54-4931-A86F-AF2832A22828</a:ObjectID>
<a:Name>Association_2</a:Name>
<a:Code>association2</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:RoleBName>etatProfil</a:RoleBName>
<a:RoleBVisibility>-</a:RoleBVisibility>
<a:ExtendedAttributesText>{D824A738-E160-11D2-B693-0008C7EA924D},Java,276={72FA5C48-5524-4DF7-8187-ABB19AB5AF9E},roleAContainer,6=&lt;None&gt;
{F6FFC71C-C472-4261-A710-B0BCC0BF4D58},roleAImplementationClass,6=&lt;None&gt;
{C11C9F66-6453-43A2-8824-6654518CF65A},roleBImplementationClass,6=&lt;None&gt;
{78C31404-0EE5-4FD0-9038-EE396B305F05},roleBContainer,6=&lt;None&gt;

</a:ExtendedAttributesText>
<c:Object1>
<o:Class Ref="o35"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o37"/>
</c:Object2>
<c:RoleBMigratedAttribute>
<o:Attribute Ref="o57"/>
</c:RoleBMigratedAttribute>
</o:Association>
<o:Association Id="o21">
<a:ObjectID>E36F9EA8-8D37-4DEB-868F-78F4FF71BF13</a:ObjectID>
<a:Name>Association_3</a:Name>
<a:Code>association3</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:RoleBName>creePar</a:RoleBName>
<a:RoleBVisibility>-</a:RoleBVisibility>
<a:ExtendedAttributesText>{D824A738-E160-11D2-B693-0008C7EA924D},Java,276={72FA5C48-5524-4DF7-8187-ABB19AB5AF9E},roleAContainer,6=&lt;None&gt;
{F6FFC71C-C472-4261-A710-B0BCC0BF4D58},roleAImplementationClass,6=&lt;None&gt;
{C11C9F66-6453-43A2-8824-6654518CF65A},roleBImplementationClass,6=&lt;None&gt;
{78C31404-0EE5-4FD0-9038-EE396B305F05},roleBContainer,6=&lt;None&gt;

</a:ExtendedAttributesText>
<c:Object1>
<o:Class Ref="o37"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o41"/>
</c:Object2>
<c:RoleBMigratedAttribute>
<o:Attribute Ref="o100"/>
</c:RoleBMigratedAttribute>
</o:Association>
<o:Association Id="o25">
<a:ObjectID>3E68E4AA-CF8B-4E60-9A13-42E7EB7ED59D</a:ObjectID>
<a:Name>Association_4</a:Name>
<a:Code>association4</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:RoleBName>offre</a:RoleBName>
<a:RoleBVisibility>-</a:RoleBVisibility>
<a:ExtendedAttributesText>{D824A738-E160-11D2-B693-0008C7EA924D},Java,276={72FA5C48-5524-4DF7-8187-ABB19AB5AF9E},roleAContainer,6=&lt;None&gt;
{F6FFC71C-C472-4261-A710-B0BCC0BF4D58},roleAImplementationClass,6=&lt;None&gt;
{C11C9F66-6453-43A2-8824-6654518CF65A},roleBImplementationClass,6=&lt;None&gt;
{78C31404-0EE5-4FD0-9038-EE396B305F05},roleBContainer,6=&lt;None&gt;

</a:ExtendedAttributesText>
<c:Object1>
<o:Class Ref="o40"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o42"/>
</c:Object2>
<c:RoleBMigratedAttribute>
<o:Attribute Ref="o103"/>
</c:RoleBMigratedAttribute>
</o:Association>
<o:Association Id="o27">
<a:ObjectID>D73DE309-AECD-416F-8CC8-313AF0F5F6CF</a:ObjectID>
<a:Name>Association_5</a:Name>
<a:Code>association5</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:RoleBName>demande</a:RoleBName>
<a:RoleBVisibility>-</a:RoleBVisibility>
<a:ExtendedAttributesText>{D824A738-E160-11D2-B693-0008C7EA924D},Java,276={72FA5C48-5524-4DF7-8187-ABB19AB5AF9E},roleAContainer,6=&lt;None&gt;
{F6FFC71C-C472-4261-A710-B0BCC0BF4D58},roleAImplementationClass,6=&lt;None&gt;
{C11C9F66-6453-43A2-8824-6654518CF65A},roleBImplementationClass,6=&lt;None&gt;
{78C31404-0EE5-4FD0-9038-EE396B305F05},roleBContainer,6=&lt;None&gt;

</a:ExtendedAttributesText>
<c:Object1>
<o:Class Ref="o41"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o42"/>
</c:Object2>
<c:RoleBMigratedAttribute>
<o:Attribute Ref="o104"/>
</c:RoleBMigratedAttribute>
</o:Association>
<o:Association Id="o31">
<a:ObjectID>E90D5E9B-C77F-4DF4-8490-18482F0A1B3B</a:ObjectID>
<a:Name>Association_6</a:Name>
<a:Code>association6</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:RoleBName>type</a:RoleBName>
<a:RoleBVisibility>-</a:RoleBVisibility>
<a:ExtendedAttributesText>{D824A738-E160-11D2-B693-0008C7EA924D},Java,276={72FA5C48-5524-4DF7-8187-ABB19AB5AF9E},roleAContainer,6=&lt;None&gt;
{F6FFC71C-C472-4261-A710-B0BCC0BF4D58},roleAImplementationClass,6=&lt;None&gt;
{C11C9F66-6453-43A2-8824-6654518CF65A},roleBImplementationClass,6=&lt;None&gt;
{78C31404-0EE5-4FD0-9038-EE396B305F05},roleBContainer,6=&lt;None&gt;

</a:ExtendedAttributesText>
<c:Object1>
<o:Class Ref="o36"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o45"/>
</c:Object2>
<c:RoleBMigratedAttribute>
<o:Attribute Ref="o115"/>
</c:RoleBMigratedAttribute>
</o:Association>
<o:Association Id="o33">
<a:ObjectID>7B5A2215-E1B4-4894-A1BE-4AA74919B959</a:ObjectID>
<a:Name>Association_7</a:Name>
<a:Code>association7</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:RoleBName>destinataire</a:RoleBName>
<a:RoleBVisibility>-</a:RoleBVisibility>
<a:ExtendedAttributesText>{D824A738-E160-11D2-B693-0008C7EA924D},Java,276={72FA5C48-5524-4DF7-8187-ABB19AB5AF9E},roleAContainer,6=&lt;None&gt;
{F6FFC71C-C472-4261-A710-B0BCC0BF4D58},roleAImplementationClass,6=&lt;None&gt;
{C11C9F66-6453-43A2-8824-6654518CF65A},roleBImplementationClass,6=&lt;None&gt;
{78C31404-0EE5-4FD0-9038-EE396B305F05},roleBContainer,6=&lt;None&gt;

</a:ExtendedAttributesText>
<c:Object1>
<o:Class Ref="o37"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o45"/>
</c:Object2>
<c:RoleBMigratedAttribute>
<o:Attribute Ref="o116"/>
</c:RoleBMigratedAttribute>
</o:Association>
</c:Associations>
<c:Generalizations>
<o:Generalization Id="o9">
<a:ObjectID>92DA26F7-E09D-4234-B848-3419F42BFD58</a:ObjectID>
<a:Name>Cooperatif étend Utilisateur</a:Name>
<a:Code>Cooperatif_étend_Utilisateur</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:Comment>Cooperatif étend Utilisateur</a:Comment>
<c:Object1>
<o:Class Ref="o37"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o38"/>
</c:Object2>
</o:Generalization>
<o:Generalization Id="o12">
<a:ObjectID>BE340D5F-F1F3-4E15-9AC0-63D1CA7A04F9</a:ObjectID>
<a:Name>Commercant étend Utilisateur</a:Name>
<a:Code>Commercant_étend_Utilisateur</a:Code>
<a:CreationDate>1752572635</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572635</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:Comment>Commercant étend Utilisateur</a:Comment>
<c:Object1>
<o:Class Ref="o37"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o39"/>
</c:Object2>
</o:Generalization>
</c:Generalizations>
<c:TargetModels>
<o:TargetModel Id="o119">
<a:ObjectID>C1378716-347F-4429-9A37-9D2AD71B8F6C</a:ObjectID>
<a:Name>Java 1.x</a:Name>
<a:Code>Java</a:Code>
<a:CreationDate>1752572618</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572618</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:TargetModelURL>file:///%_OBJLANG%/java.xol</a:TargetModelURL>
<a:TargetModelID>D824A738-E160-11D2-B693-0008C7EA924D</a:TargetModelID>
<a:TargetModelClassID>1811206C-1A4B-11D1-83D9-444553540000</a:TargetModelClassID>
<c:SessionShortcuts>
<o:Shortcut Ref="o3"/>
</c:SessionShortcuts>
</o:TargetModel>
<o:TargetModel Id="o120">
<a:ObjectID>EB13E696-C596-4C64-A3F7-DD03500E9C76</a:ObjectID>
<a:Name>WSDL for Java</a:Name>
<a:Code>WSDLJava</a:Code>
<a:CreationDate>1752572618</a:CreationDate>
<a:Creator>hp</a:Creator>
<a:ModificationDate>1752572618</a:ModificationDate>
<a:Modifier>hp</a:Modifier>
<a:TargetModelURL>file:///%_XEM%/WSDLJ2EE.xem</a:TargetModelURL>
<a:TargetModelID>C8F5F7B2-CF9D-4E98-8301-959BB6E86C8A</a:TargetModelID>
<a:TargetModelClassID>186C8AC3-D3DC-11D3-881C-00508B03C75C</a:TargetModelClassID>
<c:SessionShortcuts>
<o:Shortcut Ref="o4"/>
</c:SessionShortcuts>
</o:TargetModel>
</c:TargetModels>
</o:Model>
</c:Children>
</o:RootObject>

</Model>