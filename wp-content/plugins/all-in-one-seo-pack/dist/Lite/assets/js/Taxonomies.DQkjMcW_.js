import{a as x,u as A,e as y}from"./links.BhxvVKuk.js";import{A as k,T as D}from"./TitleDescription.Y7lB0iMS.js";import{C as P}from"./Card.DILuNRbD.js";import{C as B}from"./Tabs.DlfLDOi9.js";import{C as O}from"./Tooltip.DcUmvaHX.js";import{P as L}from"./PostTypes.Cef6XkQ_.js";import{a as E}from"./index.DX4OhBfI.js";import{y as a,c as l,F as h,L as g,o as s,l as f,m as n,a as o,I as j,E as c,t as e,D as p,x as w,T as F}from"./vue.esm-bundler.DzelZkHk.js";import{_ as I}from"./_plugin-vue_export-helper.BN1snXvA.js";import"./default-i18n.BtxsUzQk.js";import"./isArrayLikeObject.CkjpbQo7.js";import"./JsonValues.D25FTfEu.js";import"./MaxCounts.DHV7qSQX.js";import"./RadioToggle.XiBFFWmC.js";import"./Caret.Cuasz9Up.js";import"./ProBadge.Dgq0taM8.js";import"./RobotsMeta.DjWj_HSz.js";import"./Checkbox.CfGJSeWE.js";import"./Checkmark.Du5wcsnR.js";import"./Row.ou4tdPuA.js";import"./SettingsRow.B0N4hwjp.js";import"./tags.Bp6OFtD5.js";import"./Tags.BmZ4Q9eM.js";import"./postSlug.FF8bFoUR.js";import"./metabox.fwOS5wS6.js";import"./cleanForSlug.C_GG_Tvc.js";import"./toString.EVG10Qqs.js";import"./_baseTrim.BYZhh0MR.js";import"./_stringToArray.DnK4tKcY.js";import"./get.CmvQfcJ_.js";import"./GoogleSearchPreview.D8LsBN4F.js";import"./strings.BSdKmKF9.js";import"./isString.Dmb68Xbt.js";import"./constants.DARe-ccJ.js";import"./HtmlTagsEditor.CoHm5iUc.js";import"./Editor.CLGShP5s.js";import"./UnfilteredHtml.CjrgLwaX.js";import"./Slide.BfXXFx9A.js";import"./TruSeoScore.-L7x872T.js";import"./Ellipse.BqPxWN8A.js";import"./Information.Dx9dnFtu.js";const M={setup(){return{optionsStore:x(),rootStore:A(),settingsStore:y()}},components:{Advanced:k,CoreCard:P,CoreMainTabs:B,CoreTooltip:O,SvgCircleQuestionMark:E,TitleDescription:D},mixins:[L],data(){return{internalDebounce:null,strings:{label:this.$t.__("Label:",this.$td),name:this.$t.__("Slug:",this.$td),postTypes:this.$t.__("Post Types:",this.$td),ctaButtonText:this.$t.__("Unlock Custom Taxonomies",this.$td),ctaDescription:this.$t.sprintf(this.$t.__("%1$s %2$s lets you set the SEO title and description for custom taxonomies. You can also control all of the robots meta and other options just like the default category and tags taxonomies.",this.$td),"AIOSEO","Pro"),ctaHeader:this.$t.sprintf(this.$t.__("Custom Taxonomy Support is a %1$s Feature",this.$td),"PRO")},tabs:[{slug:"title-description",name:this.$t.__("Title & Description",this.$td),access:"aioseo_search_appearance_settings",pro:!1},{slug:"advanced",name:this.$t.__("Advanced",this.$td),access:"aioseo_search_appearance_settings",pro:!1}]}},computed:{taxonomies(){return this.rootStore.aioseo.postData.taxonomies}},methods:{processChangeTab(m,_){this.internalDebounce||(this.internalDebounce=!0,this.settingsStore.changeTab({slug:`${m}SA`,value:_}),setTimeout(()=>{this.internalDebounce=!1},50))}}},N={class:"aioseo-search-appearance-taxonomies"},R={class:"aioseo-description"},V=o("br",null,null,-1),q=o("br",null,null,-1),z=o("br",null,null,-1);function U(m,_,H,r,i,d){const b=a("svg-circle-question-mark"),S=a("core-tooltip"),T=a("core-main-tabs"),C=a("core-card");return s(),l("div",N,[(s(!0),l(h,null,g(d.taxonomies,(t,$)=>(s(),f(C,{key:$,slug:`${t.name}SA`},{header:n(()=>[o("div",{class:j(["icon dashicons",m.getPostIconClass(t.icon)])},null,2),c(" "+e(t.label)+" ",1),p(S,{"z-index":"99999"},{tooltip:n(()=>[o("div",R,[c(e(i.strings.label)+" ",1),o("strong",null,e(t.label),1),V,c(" "+e(i.strings.name)+" ",1),o("strong",null,e(t.name),1),q,c(" "+e(i.strings.postTypes),1),z,o("ul",null,[(s(!0),l(h,null,g(t.postTypes,(u,v)=>(s(),l("li",{key:v},[o("strong",null,e(u),1)]))),128))])])]),default:n(()=>[p(b)]),_:2},1024)]),tabs:n(()=>[p(T,{tabs:i.tabs,showSaveButton:!1,active:r.settingsStore.settings.internalTabs[`${t.name}SA`],internal:"",onChanged:u=>d.processChangeTab(t.name,u)},null,8,["tabs","active","onChanged"])]),default:n(()=>[p(F,{name:"route-fade",mode:"out-in"},{default:n(()=>[(s(),f(w(r.settingsStore.settings.internalTabs[`${t.name}SA`]),{object:t,separator:r.optionsStore.options.searchAppearance.global.separator,options:r.optionsStore.dynamicOptions.searchAppearance.taxonomies[t.name],type:"taxonomies","show-bulk":!1},null,8,["object","separator","options"]))]),_:2},1024)]),_:2},1032,["slug"]))),128))])}const Et=I(M,[["render",U]]);export{Et as default};
