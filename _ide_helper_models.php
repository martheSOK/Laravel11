<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string $date_commande
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LigneCommande> $lignecommandes
 * @property-read int|null $lignecommandes_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Commande newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Commande newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Commande query()
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereDateCommande($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereUserId($value)
 */
	class Commande extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string $nom
 * @property string $pays
 * @property string $ville
 * @property string $quartier
 * @property string $adresse
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Evenement> $evenements
 * @property-read int|null $evenements_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise query()
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise wherePays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise whereQuartier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise whereVille($value)
 */
	class Entreprise extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $entreprise_id
 * @property string $nom
 * @property string $pays
 * @property string $ville
 * @property string $adresse
 * @property string $gps
 * @property string $description
 * @property string $date_event
 * @property string $heur_debut
 * @property string $heur_fin
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Entreprise $entreprise
 * @property-read \App\Models\Template|null $template
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Ticket> $tickets
 * @property-read int|null $tickets_count
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereDateEvent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereEntrepriseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereGps($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereHeurDebut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereHeurFin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement wherePays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereVille($value)
 */
	class Evenement extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\Commande|null $commande
 * @property-read \App\Models\Ticket|null $ticket
 * @method static \Illuminate\Database\Eloquent\Builder|LigneCommande newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LigneCommande newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LigneCommande query()
 */
	class LigneCommande extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $libelle
 * @property string $contenu
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Ticket> $tickets
 * @property-read int|null $tickets_count
 * @method static \Illuminate\Database\Eloquent\Builder|Template newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Template newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Template query()
 * @method static \Illuminate\Database\Eloquent\Builder|Template whereContenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Template whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Template whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Template whereLibelle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Template whereUpdatedAt($value)
 */
	class Template extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $event_id
 * @property int $template_id
 * @property string $libelle
 * @property int $prix
 * @property int $nombre_place
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Evenement|null $evenement
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LigneCommande> $lignecommandes
 * @property-read int|null $lignecommandes_count
 * @property-read \App\Models\Template $template
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereLibelle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereNombrePlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket wherePrix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereUpdatedAt($value)
 */
	class Ticket extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $nom
 * @property string $prenom
 * @property string $contact
 * @property string $status
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Commande> $commandes
 * @property-read int|null $commandes_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Entreprise> $entreprises
 * @property-read int|null $entreprises_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutRole($roles, $guard = null)
 */
	class User extends \Eloquent {}
}

